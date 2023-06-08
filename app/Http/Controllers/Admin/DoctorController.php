<?php

namespace App\Http\Controllers\Admin;

use App\Models\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('admin.doctors.index' , compact('doctors'));
    }

    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('admin.doctors.update', compact('doctor'));
    }

    public function update(Request $request, $id)
    {

    $doctor = Doctor::findOrFail($id);
    $doctor->name = $request->input('name');
    $doctor->specialty = $request->input('specialty');
    $doctor->phone = $request->input('phone');
    // Update other fields as needed
    $doctor->save();

    return redirect()->route('admin_doctor')->with('success', 'Doctor updated successfully');
    }

    public function create()
    {
        return view('admin.doctors.create');
    }

    public function store(Request $request)
    {
    $doctor = new Doctor();
    $doctor->name = $request->input('name');
    $doctor->email = $request->input('email');
    $doctor->password = Hash::make($request->input('password'));
    $doctor->address = $request->input('address');
    $doctor->gender = $request->input('gender');
    $doctor->specialty = $request->input('specialty');
    $doctor->phone = $request->input('phone');
    // Set other fields as needed
    $doctor->save();

    return redirect()->route('admin_doctor')->with('success', 'Doctor added successfully');
    }

    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();
        return redirect()->route('admin_doctor')->with('success', 'Doctor deleted successfully.');
    }


}
