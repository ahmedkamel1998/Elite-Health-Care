<?php

namespace App\Http\Controllers\Admin;

use App\Models\Follow_up;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FollowUpController extends Controller
{
    public function index()
    {
        $follows = Follow_up::all();
        return view('admin.follow ups.index' , compact('follows'));
    }

    public function destroy($id)
    {
        $follow = Follow_up::findOrFail($id);
        $follow->delete();
        return redirect()->route('admin_follow')->with('success', 'deleted successfully.');
    }

    public function edit($id)
    {
        $follow = Follow_up::findOrFail($id);
        return view('admin.follow ups.answer', compact('follow'));
    }

    public function update(Request $request, $id)
    {

    $follow = Follow_up::findOrFail($id);
    $follow->answer = $request->input('answer');
    $follow->save();

    return redirect()->route('admin_follow')->with('success', 'answer send successfully');
    }

}
