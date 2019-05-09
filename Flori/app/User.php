<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
   
    use Notifiable;

    protected $primaryKey = 'username';

    protected $table = "users";
    
    protected $fillable = [
        'first_name', 'last-name' , 'username', 'email', 'password', 'telephone','id'
    ];
 
}