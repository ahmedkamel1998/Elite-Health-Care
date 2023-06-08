<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Pharmacy;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input('name');
        $keyword2 = $request->input('specialty');

        // Perform the search query based on your requirements
        $doctors = Doctor::where('name', 'LIKE', '%'.$keyword.'%')
            ->Where('specialty', 'LIKE', '%'.$keyword2.'%')
            ->get();

        return view('doctors.doctor', compact('doctors'));
    }

    public function search2(Request $request)
    {
        $keyword = $request->input('name');
        $keyword2 = $request->input('specialties');

        // Perform the search query based on your requirements
        $hospitals = Hospital::where('name', 'LIKE', '%'.$keyword.'%')
            ->Where('specialties', 'LIKE', '%'.$keyword2.'%')
            ->get();

        return view('hospitals.hospital', compact('hospitals'));
    }

    public function search3(Request $request)
    {
        $keyword = $request->input('name');
        $keyword2 = $request->input('phone');

        // Perform the search query based on your requirements
        $pharmacies = Pharmacy::where('name', 'LIKE', '%'.$keyword.'%')
            ->Where('phone', 'LIKE', '%'.$keyword2.'%')
            ->get();

        return view('pharmacy.pharmacy', compact('pharmacies'));
    }
}
