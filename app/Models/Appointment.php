<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
   protected $fillable = [
        'doctor_id','patient_id', 'pain_id', 'date', 'status'
    ];
    public function pain()
    {
        return $this->belongsTo('App\Models\Pain'); 
    }
    public function user()
    {
        return $this->belongsToMany('App\User','Appointments');
    
    }
}
