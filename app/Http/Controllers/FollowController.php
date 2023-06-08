<?php

namespace App\Http\Controllers;

use App\Models\Follow_UP;
use Illuminate\Http\Request;

class FollowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth('patient')->user();
        $follows = $user->follow_ups;

        return view('follows.follow', compact('follows'));
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

        $follow = new Follow_UP;

        $follow->message = $request->message;

        if ($request->hasFile('file'))
        {
            $file = $request->file('file');

            // Generate a unique filename
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();

            // Store the file in the desired location (e.g., storage/app/files)
            $file->storeAs('files', $filename);

            // Save the file path to the database
            $follow->file = $filename;
        }
        $follow->patient_id = 1;
        $follow->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Follow $follow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Follow $follow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Follow $follow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Follow $follow)
    {
        //
    }
}
