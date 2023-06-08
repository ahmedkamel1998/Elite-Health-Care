<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Doctor extends Authenticatable
{

    protected $table = 'doctors';
    public $timestamps = true;
    protected $fillable = array('name', 'phone', 'email', 'address', 'gender', 'specialty','password');

}
