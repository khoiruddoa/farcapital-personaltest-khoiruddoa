<?php

namespace App\Http\Controllers;

use App\Models\DonorContinue;
use Illuminate\Http\Request;

class DonorContinueController extends Controller
{
    public function create()
    {
        return view('users.donors.continue.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->all();
        DonorContinue::create($validatedData);
        return redirect('/users/donors/continue/index')->with('success', 'daftar donor berhasil');
    }

    public function index()
    {
        return view('users.donors.continue.index', [
            'donors' => DonorContinue::all()
        ]);
    }
}
