<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\DonorContinue;
use App\Models\Donor;
use Illuminate\Http\Request;

class DonorContinueController extends Controller
{
    public function create($id)

    {

        return view('users.donors.continue.create', [
            "id" => $id

        ]);
    }

    public function store(Request $request)
    {
        $id = $request->donor_id;
        $validatedData = $request->validate([

            'hepatitis' => 'required',
            'kontak' => 'required',
            'transfusi' => 'required',
            'tato' => 'required',
            'gigi' => 'required',
            'operasi' => 'required',
            'vaksin' => 'required',
            'parotis' => 'required',
            'rabies' => 'required',
            'alergi' => 'required',
            'kulit' => 'required',
            'hamil' => 'required',
            'susui' => 'required',
            'obat' => 'required',
            'alkohol' => 'required',
            'sifilis' => 'required',
            'tuberkulosis' => 'required',
            'epilepsi' => 'required',
            'vena' => 'required',
            'thalasemia' => 'required',
            'hiv' => 'required',
            'aids' => 'required',
            'haid' => 'required',
            'donor_id' => 'required'
        ]);

        if (
            $request->hepatitis == 0 &&
            $request->kontak == 0 &&
            $request->transfusi == 0 &&
            $request->tato == 0 &&
            $request->gigi == 0 &&
            $request->operasi == 0 &&
            $request->vaksin == 0 &&
            $request->parotis == 0 &&
            $request->rabies == 0 &&
            $request->alergi == 0 &&
            $request->kulit == 0 &&
            $request->hamil == 0 &&
            $request->susui == 0 &&
            $request->obat == 0 &&
            $request->alkohol == 0 &&
            $request->sifilis == 0 &&
            $request->tuberkulosis == 0 &&
            $request->epilepsi == 0 &&
            $request->vena == 0 &&
            $request->thalasemia == 0 &&
            $request->hiv == 0 &&
            $request->aids == 0 &&
            $request->haid == 0
        ) {
            $status = true;
        } else {
            $status = false;
        }



        $validatedData['status_donor'] = $status;
        DonorContinue::create($validatedData);


        return redirect(route('continueFormIndex', ['id' => $id]))->with('success', 'daftar donor berhasil');
    }

    public function index($id)
    {
        $donorContinue = DB::table('donor_continues')->where('donor_id', $id)
            ->orderBy('id', 'desc')
            ->first();

        return view('users.donors.continue.index', [
            'donorContinue' =>  $donorContinue

        ]);
    }
}
