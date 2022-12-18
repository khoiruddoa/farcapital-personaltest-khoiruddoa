<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Donor;
use App\Models\DonorContinue;
use App\Models\DonorCriteria;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'donors' => Donor::all()
        ]);
    }

    public function show(Donor $donor)
    {

        $donorAccept = DB::table('donor_continues')
            ->join('donors', 'donor_continues.donor_id', '=', 'donors.id')
            ->where('donor_continues.donor_id', $donor->id)
            ->orderBy('donor_continues.id', 'desc')
            ->first();
        return view('dashboard.detail', [
            'donor' => $donorAccept
        ]);
    }

    public function criteria($id)
    {
        return view('dashboard.criteria', [
            "id_continue_donor" => $id
        ]);
    }
    public function store(Request $request)
    {
        $table = DB::table('donor_continues')
            ->join('donors', 'donor_continues.donor_id', '=', 'donors.id')
            ->where('donor_continues.donor_id', $request->donor_continue_id)
            ->orderBy('donor_continues.id', 'desc')
            ->first();

        $gender = $table->jenis_kelamin;
        $validatedData = $request->validate([
            'donor_continue_id' => 'required',
            'berat_badan' => 'required',
            'suhu' => 'required',
            'sistole' => 'required',
            'diastole' => 'required',
            'nadi' => 'required',
            'haemoglobin' => 'required'

        ]);

        $status = true;
        if ($request->berat_badan < 45) {
            $status = false;
            $keterangan1 = "berat badan kurang dari 45 kg,";
        } else {
            $status = true;
            $keterangan1 = "";
        }
        if ($request->suhu < 36.6 || $request->suhu > 37.5) {
            $status = false;
            $keterangan2 = "suhu tidak memenuhi standar, ";
        } else {
            $status = true;
            $keterangan2 = "";
        }
        if ($request->sistole < 110 || $request->sistole > 160) {
            $status = false;
            $keterangan3 = "sistole tidak memenuhi standar, ";
        } else {
            $status = true;
            $keterangan3 = "";
        }
        if ($request->diastole < 70 || $request->diastole > 100) {
            $status = false;
            $keterangan4 = "diastole tidak memenuhi standar, ";
        } else {
            $status = true;
            $keterangan4 = "";
        }
        if ($request->nadi < 50 || $request->suhu > 100) {
            $status = false;
            $keterangan4 = "nadi tidak memenuhi standar, ";
        } else {
            $status = true;
            $keterangan4 = "";
        }

        if ($request->haemoglobin < 12 && $gender == 'wanita') {
            $status = false;
            $keterangan5 = "haemoglobin tidak memenuhi standar, ";
        } else {
            $status = true;
            $keterangan5 = "";
        }

        if ($request->haemoglobin < 12.5 && $gender == 'pria') {
            $status = false;
            $keterangan6 = "haemoglobin tidak memenuhi standar, ";
        } else {
            $status = true;
            $keterangan6 = "";
        }




        $keterangan = $keterangan1 . $keterangan2 .  $keterangan3 . $keterangan4 . $keterangan5 . $keterangan6;

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['status_periksa'] = $status;
        $validatedData['keterangan_periksa'] = $keterangan;
        DonorCriteria::create($validatedData);
        return redirect(route('dashboardshow', ['id' => $request->donor_continue_id]));
    }
    public function showcriteria($id)
    {
        $criteria = DB::table('donor_criterias')
            ->where('donor_continue_id', $id)
            ->orderBy('id', 'desc')
            ->first();
        return view(
            'dashboard.show',
            ['criteria' => $criteria]
        );
    }
}
