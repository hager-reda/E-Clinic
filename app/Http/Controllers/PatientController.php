<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\StorePatientInfoRequest;
use Spatie\Permission\Models\Role;


class PatientController extends Controller
{
    public function insert()
    {
        return view('patients.insert');
    }
    public function save(StorePatientInfoRequest $req)
    {
        $user = User::latest()->first();
        // dd($req);
        $user->update([
            'first_name'=> $req->first_name,
            'last_name'=> $req->last_name,
            // 'email'=> $req->email,
            'phone'=>  $req->phone,
            'date_of_birth'=> $req->date_of_birth,
            'gender'=> $req->gender,
            'country'=>  $req->country,
            'occupation'=>  $req->occupation,
            
        ]);  
        $role=Role::find(3);
        $user->assignRole($role); 
        return redirect()->route('appointments.create');
    }
}
