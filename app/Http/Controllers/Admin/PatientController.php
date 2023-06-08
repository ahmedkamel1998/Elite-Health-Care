<?php

namespace App\Http\Controllers\Admin;

use App\Models\Patient;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return view('admin.patients.index' , compact('patients'));
    }

    public function edit($id)
    {
        $patient = Patient::findOrFail($id);
        return view('admin.patients.update', compact('patient'));
    }

    public function update(Request $request, $id)
    {

    $patient = Patient::findOrFail($id);
    $patient->name = $request->input('name');
    $patient->phone = $request->input('phone');
    $patient->age = $request->input('age');
    $patient->governorate = $request->input('governorate');

    // Update other fields as needed
    $patient->save();

    return redirect()->route('admin_patient')->with('success', 'Patient updated successfully');
    }


    // public function create()
    // {
    //     return view('admin.patients.create');
    // }

    // public function store(Request $request)
    // {
    //     $patient = new Patient();
    //     $patient->name = $request->input('name');
    //     $patient->password = Hash::make($request->input('password'));
    //     $patient->governorate = $request->input('governorate');
    //     $patient->address = $request->input('address');
    //     $patient->phone = $request->input('phone');

    //     // Update other fields as needed
    //     $patient->save();

    //     return redirect()->route('admin_patient')->with('success', 'Patient updated successfully');
    //     }

    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();
        return redirect()->route('admin_patient')->with('success', 'Patient deleted successfully.');
    }
}
