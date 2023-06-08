<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function login()
     {
         return view('patients.login');
     }

     public function signup()
     {
       return view('patients.signup');
     }

     public function patient_signin(Request $request)

     {

         $patient = Patient::where('email',$request->email)->first();

         if ($patient)
         {
             if (Hash::check($request->password, $patient->password)){
                 Auth::guard('patient')->login($patient);
                 return redirect('/');
             }
             else {
                  return response('try again');
             }
         }
         else
         {
             return response('User not found, login failed');
         }
     }

    public function index()
    {
        $patients = Patient::all();
        return view('patients.patient',compact('patients'));
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
        $patient = new Patient;

        $patient->name = $request->name;
        $patient->phone = $request->phone;
        $patient->email = $request->email;
        $patient->password = Hash::make($request->password);
        $patient->age = $request->age;
        $patient->governorate = $request->governorate;


       $patient->save();

       return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        //
    }

    public function logout_patient(Request $request)
    {
    Auth::guard('patient')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/'); // Replace this with the appropriate redirect URL after logout
    }
}
