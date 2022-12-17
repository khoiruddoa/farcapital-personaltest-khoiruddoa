<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Donor;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function index()
    {
        return view('users.donors.index', [
            'donors' => Donor::firstWhere('user_id', auth()->user()->id)->get()
        ]);
    }

    public function create()
    {
        return view('users.donors.create');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([

            'name' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required'


        ]);
        $validatedData['user_id'] = auth()->user()->id;
        Donor::create($validatedData);
        return redirect('/users/donors/')->with('success', 'daftar donor berhasil');
    }
}
