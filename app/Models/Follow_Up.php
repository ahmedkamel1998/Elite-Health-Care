<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Follow_Up extends Model
{

    protected $table = 'follows_up';
    public $timestamps = true;
    protected $fillable = array('patient_id' , 'file', 'answer', 'message');

    public function patient()
    {
        return $this->belongsTo('App\Models\Patient');
    }

}
