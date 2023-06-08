<?php

namespace App\Http\Controllers;

use App\Models\Pharmacy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('pharmacy.login');
    }

    public function signup()
    {
      return view('pharmacy.signup');

    }

    public function pharmacy_signin(Request $request)
    {

        $pharmacy = Pharmacy::where('phone',$request->phone)->first();

        if ($pharmacy)
        {
            if (Hash::check($request->password, $pharmacy->password)){
                Auth::guard('pharmacy')->login($pharmacy);
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
        $pharmacies = Pharmacy::all();
       return view('pharmacy.pharmacy',compact('pharmacies'));
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
        $pharmacy = new Pharmacy;

        $pharmacy->name = $request->name;
        $pharmacy->password = Hash::make($request->password);
        $pharmacy->governorate = $request->governorate;
        $pharmacy->address = $request->address;
        $pharmacy->phone = $request->phone;

        $pharmacy->save();

        return redirect('/');

    }

    /**
     * Display the specified resource.
     */
    public function show(Pharmacy $pharmacy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pharmacy $pharmacy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pharmacy $pharmacy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pharmacy $pharmacy)
    {
        //
    }

    public function logout_pharmacy(Request $request)
    {
    Auth::guard('pharmacy')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/'); // Replace this with the appropriate redirect URL after logout
    }
}
