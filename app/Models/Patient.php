<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Patient extends Authenticatable
{

    protected $table = 'patients';
    public $timestamps = true;
    protected $fillable = array('phone', 'email' , 'phone' , 'password' , 'age' , 'governorate');

    public function follow_ups()
    {
        return $this->hasMany('App\Models\Follow_Up');
    }

}
