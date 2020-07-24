<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Pain;

class AppointmentController extends Controller
{
    public function index()
    {
        $userId=auth()->user()->id; 
        $appointments = Appointment::where('patient_id',$userId)->get();
        return view('appointments.index',['appointments' => $appointments]);
    }
    public function indexDoctor()
    {
        $userId=auth()->user()->id; 
        $appointments = Appointment::where('doctor_id',$userId)->get();
        return view('appointments.index',['appointments' => $appointments]);
    }
    public function create()
    {
        $pains = Pain::all();
        return view('appointments.create',['pains' => $pains]);
    }
    public function store(Request $req)
    {   
        $appointment = new Appointment();
        $userId=auth()->user()->id;  
        $appointment->pain_id = $req->pain_id;        
        $appointment->patient_id = $userId; 
        $appointment->status = 'waiting';       
        $appointment->save();
        return view('patients.index');
    }
}
