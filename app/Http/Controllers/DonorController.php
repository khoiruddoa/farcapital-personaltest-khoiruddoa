<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;
use App\Models\Donor;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function index()
    {
        $donor = DB::table('donors')->where('user_id', auth()->user()->id)
            ->orderBy('id', 'desc')
            ->first();

        return view('users.donors.index', [
            'donor' => $donor
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

        $now = Carbon::now();
        $b_day = Carbon::parse($request->tanggal_lahir); // Tanggal Lahir
        $age = $b_day->diffInYears($now);
        if ($age >= 17 && $age <= 60) {
            $decision = true;
        } else {
            $decision = false;
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['status'] = $decision;

        Donor::create($validatedData);
        return redirect('/users/donors/')->with('success', 'daftar donor berhasil');
    }
}
