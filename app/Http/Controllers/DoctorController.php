<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function login()
    {
        return view('doctors.login');
    }

    public function signin(Request $request)
    {

        $doctor = Doctor::where('email',$request->email)->first();

        if ($doctor)
        {
            if (Hash::check($request->password, $doctor->password)){
                Auth::guard('doctor')->login($doctor);
                return redirect('/');
            }
            else {
                 return response('ejkdjeejh');
            }
        }
        else
        {
            return response('User not found, login failed');
        }


    }

    public function signup()
    {

        return view('doctors.signup');
    }

    public function index()
    {
        $doctors = Doctor::all();
        return view('doctors.doctor',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
       $doctor = new Doctor;

       $doctor->name = $request->name;
       $doctor->phone = $request->phone;
       $doctor->email = $request->email;
       $doctor->address = $request->address;
       $doctor->gender = $request->gender;
       $doctor->specialty = $request->specialty;
       $doctor->password = Hash::make($request->password);

       $doctor->save();

       return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        //
    }

    public function logout(Request $request)
    {
    Auth::guard('doctor')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/'); // Replace this with the appropriate redirect URL after logout
}
}
