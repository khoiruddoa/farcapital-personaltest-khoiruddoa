<?php

namespace App\Http\Controllers;

use App\Models\Donor;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'donors' => Donor::all()
        ]);
    }
}
