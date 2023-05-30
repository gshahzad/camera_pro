<?php

namespace App\Http\Livewire;
use Session;
use Stripe;
use Livewire\Component;
use App\Models\Camera;
use Illuminate\Http\Request;
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
  
  
    public function mount($camera_id)
    {
 			$this->camera_id = $camera_id;
            $this->camera = Camera::where('status', 1)->where('id' , $camera_id)->first();
    }
	
    public function render()
    {
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
			'card_number' => 'required',
			'card_cvc' => 'required',
			'card_expiry_month' => 'required',
			'card_expiry_year' => 'required'
        ]);
    }
    public function incrementPostCount( Request $request )
    { 
		 
		$sub_total= $this->camera->price;
 		$name  = $this->customer_name;
		$email = $this->customer_email;
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $charge = Stripe\Charge::create ([
                "amount" => $sub_total* 100,
                "currency" => "gbp",
                "source" => $this->stripeToken,
                "description" => $this->camera->name." payment" 
        ]);
		echo $this->stripeToken; 
		echo"<pre>";print_r($charge);exit;
		if($charge['status'] == 'succeeded'){
			$transaction_id = $charge['id'];
			$ordr_Arr = array(
					'customer_id' 	   => 1,
					'order_total'      => $sub_total,
					'transaction_id'   => $transaction_id,
					'order_date'       => date('Y-m-d H:i:s'),
					'customer_name'    => $this->customer_name,
					'customer_email'   => $this->customer_email,
					'customer_address' => $this->customer_address,
					'customer_city'    => $this->customer_city,
					'post_code' 	   => $this->post_code,
			);
			$order_id = DB::table('orders')->insertGetId($ordr_Arr);
			$product_Arr = array(
					'order_id' 	       => $order_id,
					'product_id'       => $this->camera_id,
					'product_price'    => $sub_total,
			);
			DB::table('orders_products')->insert($product_Arr);
			Session::flash('success', 'Your payment has been done successfully');	
			return redirect()->to('payment_success');
			
		}else{
			Session::flash('error', 'Error has occured, please try again');
		}
	}
}//class