<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pharmacy extends Authenticatable
{

    protected $table = 'pharmacies';
    public $timestamps = true;
    protected $fillable = array('name', 'government', 'address', 'phone', 'password');

}
