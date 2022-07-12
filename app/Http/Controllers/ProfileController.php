<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {

        $id = Auth::id();
        return view('profile.editprofile', [
            "profile" => User::find($id),
            "title" => "Update User"
        ]);
    }

    public function update(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'email',
        ]);

        $id = Auth::id();
        User::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect('/');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
