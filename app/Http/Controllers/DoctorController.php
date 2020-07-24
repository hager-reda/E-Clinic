<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Specialty;
use App\Http\Requests\StoreDoctorInfoRequest;
use Spatie\Permission\Models\Role;


class DoctorController extends Controller
{
    public function index()
    {
        return view('doctors.index');
    }

    public function insert()
    { 
        $specialties = Specialty::all();
        return view('doctors.insert',['specialties' => $specialties]);
    }
    
    public function save(StoreDoctorInfoRequest $req)
    {
        $user = User::latest()->first();
        $user->update([
            'first_name'=> $req->first_name,
            'last_name'=> $req->last_name,
            'phone'=>  $req->phone,
            'date_of_birth'=> $req->date_of_birth,
            'gender'=> $req->gender,
            'country'=>  $req->country,
            'speciality_id'=> $req->specialty,                     
        ]);  
        $role=Role::find(2);
        $user->assignRole($role); 
        return redirect()->route('doctors.index');
    }
}
