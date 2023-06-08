<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pharmacy;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PharmaciesController extends Controller
{
    public function index()
    {
        $pharmacies = Pharmacy::all();
        return view('admin.pharmacies.index' , compact('pharmacies'));
    }

    public function edit($id)
    {
        $pharmacy = Pharmacy::findOrFail($id);
        return view('admin.pharmacies.update', compact('pharmacy'));
    }

    public function update(Request $request, $id)
    {

    $pharmacy = Pharmacy::findOrFail($id);
    $pharmacy->name = $request->input('name');
    $pharmacy->governorate = $request->input('governorate');
    $pharmacy->address = $request->input('address');
    $pharmacy->phone = $request->input('phone');
    // Update other fields as needed
    $pharmacy->save();

    return redirect()->route('admin_pharmacy')->with('success', 'Pharmacy updated successfully');
    }


    public function create()
    {
        return view('admin.pharmacies.create');
    }

    public function store(Request $request)
    {
        $pharmacy = new Pharmacy();
        $pharmacy->name = $request->input('name');
        $pharmacy->password = Hash::make($request->input('password'));
        $pharmacy->governorate = $request->input('governorate');
        $pharmacy->address = $request->input('address');
        $pharmacy->phone = $request->input('phone');

        // Update other fields as needed
        $pharmacy->save();

        return redirect()->route('admin_pharmacy')->with('success', 'Pharmacy updated successfully');
        }

    public function destroy($id)
    {
        $pharmacy = Pharmacy::findOrFail($id);
        $pharmacy->delete();
        return redirect()->route('admin_pharmacy')->with('success', 'Pharmacy deleted successfully.');
    }
}
