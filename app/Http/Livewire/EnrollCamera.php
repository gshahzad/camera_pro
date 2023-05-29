<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Camera;
//https://www.youtube.com/watch?v=8vUcZBh6Ef0&list=PL8p2I9GklV46kSNeRjIaeg3FlsP9hNrQN&index=3
//https://laravel-news.com/crud-operations-using-laravel-livewire
class EnrollCamera extends Component
{
	
		public $name;
 		public $description;
		public $camera_embed_code;
		public $camera_longitude;
		public $camera_latitude;
		public $full_name;
		public $email_address;
		public $contact_no;
		public $address;
		public $city;
		public $post_code;
		public $country;
	
	 public function rules() 
     {
        return [
			'name' => 'required',
			'description' => 'required',
			'camera_embed_code' => 'required',
			'camera_longitude' => 'required',
			'camera_latitude' => 'required',
			'full_name' => 'required',
			'email_address' => 'required',
			'contact_no' => 'required',
			'address' => 'required',
			'city' => 'required',
			'post_code' => 'required',
			'country' => 'required',
        ];
    }
	 public function updated($propertyName)
    {
        $this->validateOnly($propertyName , [
			'name' => 'required',
			'description' => 'required',
			'camera_embed_code' => 'required',
			'camera_longitude' => 'required',
			'camera_latitude' => 'required',
			'full_name' => 'required',
			'email_address' => 'required',
			'contact_no' => 'required',
			'address' => 'required',
			'city' => 'required',
			'post_code' => 'required',
			'country' => 'required',
        ]);
    }
	
 	public function submit()
    { 
		 try {
		   $this->validate();
			 Camera::create([
                'name' => $this->name,
                'description' => $this->description,
				'camera_embed_code' => $this->camera_embed_code,
				'camera_longitude' => $this->camera_longitude,
				'camera_latitude' => $this->camera_latitude,
				'full_name' => $this->full_name,
				'email_address' => $this->email_address,
				'contact_no' => $this->contact_no,
				'address' => $this->address,
				'city' => $this->city,
				'post_code' => $this->post_code,
				'country' => $this->country,

            ]);
			session()->flash('success','Your request has been posted successfully. we will check and get back to you!');
			 return redirect()->to('/enroll_camera');
		} catch (\Exception $ex) {
            session()->flash('success','Something goes wrong!!');
        }	
    
       // return redirect()->to('/form');
    }
	
	
    public function render()
    {
      //  return view('livewire.enroll-camera');
		return view('livewire.enroll-camera')->extends('layouts.app') ;
    }
}
