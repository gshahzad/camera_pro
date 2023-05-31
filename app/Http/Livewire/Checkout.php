<?php

namespace App\Http\Livewire;
use Session;
use Stripe;
use Livewire\Component;
use App\Models\Camera;
use Illuminate\Http\Request;
use DB;
use Mail;
use App\Mail\NotifyMail;

use Illuminate\Support\Str;


class Checkout extends Component
{
   public $customer_name;
   public $customer_email;
   public $customer_address;
   public $customer_city;
   public $post_code;
   public $card_number;
   public $card_cvc;
   public $card_expiry_month;
   public $card_expiry_year;
   public $stripeToken;
   protected $listeners = ['doCheckout' => 'incrementPostCount'];
   public $prices_packages ;
   public $price_package_id = 0;
    public function mount($camera_id)
    {
 			$this->camera_id = $camera_id;
            $this->camera = Camera::where('status', 1)->where('id' , $camera_id)->first();
			
    }
	
    public function render()
    {
		$this->prices_packages = DB::table('camera_prices_packages')->orderBy('duration')->get();
        return view('livewire.checkout')->extends('layouts.app') ;;
    }

    public function rules() 
     {
        return [
			'customer_name' => 'required',
			'customer_email' => 'required',
			'customer_address' => 'required',
			'customer_city' => 'required',
			'post_code' => 'required',
			'price_package_id' => 'required',
			'card_number' => 'required',
			'card_cvc' => 'required',
			'card_expiry_month' => 'required',
			'card_expiry_year' => 'required'
        ];
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName , [
			'customer_name' => 'required',
			'customer_email' => 'required',
			'customer_address' => 'required',
			'customer_city' => 'required',
			'post_code' => 'required',
			'price_package_id' => 'required',
			'card_number' => 'required',
			'card_cvc' => 'required',
			'card_expiry_month' => 'required',
			'card_expiry_year' => 'required'
        ]);
    }
    public function incrementPostCount( Request $request )
    { 
		$sub_total=0;
		$package_info = DB::table('camera_prices_packages')->where('id' , $this->price_package_id)->first();
		if($package_info){
			$sub_total  = $package_info->price;	
		}
		
 		$name  = $this->customer_name;
		$email = $this->customer_email;
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $charge = Stripe\Charge::create ([
                "amount" => $sub_total* 100,
                "currency" => "gbp",
                "source" => $this->stripeToken,
                "description" => $this->camera->name." payment" 
        ]);
		
		
 		if($charge['status'] == 'succeeded'){
			$transaction_id = $charge['id'];
			$ordr_Arr = array(
					'order_total'      => $sub_total,
					'transaction_id'   => $transaction_id,
					'order_date'       => date('Y-m-d H:i:s'),
					'customer_name'    => $this->customer_name,
					'customer_email'   => $this->customer_email,
					'customer_address' => $this->customer_address,
					'customer_city'    => $this->customer_city,
					'post_code' 	   => $this->post_code,
					'camera_duration'  => $package_info->duration,
			);
			$order_id = DB::table('orders')->insertGetId($ordr_Arr);
			$product_Arr = array(
					'order_id' 	       => $order_id,
					'product_id'       => $this->camera_id,
					'product_price'    => $sub_total,
			);
			DB::table('orders_products')->insert($product_Arr);
			$url = 'checkout-success/'.$this->camera_id.'/'.Str::slug($this->camera->name);
			 $data = [
				'name'        => $this->camera->name,
				'camera_url'  => $url,
        	];
		
			//Mail::to($this->customer_email)->send(new NotifyMail($data));
			Session::flash('success', 'Your payment has been done successfully and sent you email to view camera video.');	
			return redirect()->to('checkout-success/'.$this->camera_id.'/'.Str::slug($this->camera->name));
			
		}else{
			Session::flash('error', 'Error has occured, please try again');
		}
	}
}//class