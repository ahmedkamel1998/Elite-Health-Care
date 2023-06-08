<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function login()
     {
         return view('hospitals.login');
     }

     public function signup()
     {
       return view('hospitals.signup');
     }


    public function hospital_signin(Request $request)
    {

        $hospital = Hospital::where('email',$request->email)->first();

        if ($hospital)
        {
            if (Hash::check($request->password, $hospital->password)){
                Auth::guard('hospital')->login($hospital);
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

    public function index()
    {
        $hospitals = Hospital::all();
        return view('hospitals.hospital',compact('hospitals'));
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
        $hospital = new Hospital;


       $hospital->name = $request->name;
       $hospital->email = $request->email;
       $hospital->password = Hash::make($request->password);
       $hospital->address = $request->address;
       $hospital->governorate = $request->governorate;
       $hospital->specialties = implode(", ", $request->specialties);
       $hospital->phone = $request->phone;

       $hospital->save();

       return redirect('/');

    }

    /**
     * Display the specified resource.
     */
    public function show(Hospital $hospital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hospital $hospital)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hospital $hospital)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hospital $hospital)
    {
        //
    }

    public function logout_hospital(Request $request)
    {
    Auth::guard('hospital')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/'); // Replace this with the appropriate redirect URL after logout
    }
}
