<?php

namespace App\Http\Controllers\Admin;

use App\Models\Hospital;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HospitalController extends Controller
{
    public function index()
    {
        $hospitals = Hospital::all();
        return view('admin.hospitals.index' , compact('hospitals'));
    }

    public function edit($id)
    {
        $hospital = Hospital::findOrFail($id);
        return view('admin.hospitals.update', compact('hospital'));
    }

    public function update(Request $request, $id)
    {

    $hospital = Hospital::findOrFail($id);
    $hospital->name = $request->input('name');
    $hospital->governorate = $request->input('governorate');
    $hospital->address = $request->input('address');
    $hospital->specialties = $request->input('specialties');
    $hospital->phone = $request->input('phone');
    // Update other fields as needed
    $hospital->save();

    return redirect()->route('admin_hospital')->with('success', 'Hospital updated successfully');
    }


    public function create()
    {
        return view('admin.hospitals.create');
    }

    public function store(Request $request)
    {
        $hospital = new Hospital();
        $hospital->name = $request->input('name');
        $hospital->email = $request->input('email');
        $hospital->password = Hash::make($request->input('password'));
        $hospital->governorate = $request->input('governorate');
        $hospital->address = $request->input('address');
        $hospital->phone = $request->input('phone');
        $hospital->specialties = implode(", ", $request->input('specialties'));

        // Update other fields as needed
        $hospital->save();

        return redirect()->route('admin_hospital')->with('success', 'Hospital updated successfully');
        }

    public function destroy($id)
    {
        $hospital = Hospital::findOrFail($id);
        $hospital->delete();
        return redirect()->route('admin_hospital')->with('success', 'Hospital deleted successfully.');
    }
}
