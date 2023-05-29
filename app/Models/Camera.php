<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Camera extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'camera_embed_code',
		'camera_longitude',
		'camera_latitude',
		'full_name' ,
		'email_address' ,
		'contact_no' ,
		'address' ,
		'city' ,
		'post_code' ,
		'country' 
		
    ];
    
}
