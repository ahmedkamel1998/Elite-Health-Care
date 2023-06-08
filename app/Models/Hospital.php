<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Hospital extends Authenticatable
{

    protected $table = 'hospitals';
    public $timestamps = true;
    protected $fillable = array('name', 'email', 'address', 'government', 'phone' , 'password' , 'specialties');

}
