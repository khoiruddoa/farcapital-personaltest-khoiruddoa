<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register', []);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'email' => ['required', 'unique:users'],
            'password' => 'required|min:5|max:255',
            'role' => 'required'
        ]);
        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        // $request->session()->flash('success', 'Registration Succesfull! Please Login');
        return redirect('/login')->with('success', 'Registration Succesfull! Please Login');
    }
}
