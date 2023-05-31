<?php

namespace App\Http\Livewire;
use App\Models\Camera;
use Livewire\Component;
use DB;
class CheckoutSuccess extends Component
{
	public $camera_id;
	public $order_id;
	protected $listeners = ['updateDuration' => 'doUpdateDuration'];
    public function mount($camera_id)
    {
            $this->camera_id = $camera_id;
            $this->camera = Camera::where('status', 1)->where('id' , $camera_id)->first();
    }
	
    public function render()
    {
        return view('livewire.checkout-success')->extends('layouts.app');
    }
	
	function doUpdateDuration(){
		exit('OK');	
	}
}//class