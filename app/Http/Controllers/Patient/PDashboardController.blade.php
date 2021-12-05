<?php

namespace App\Http\Controllers\Patient;

use App\Models\Manage_Test;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PDashboardController extends Controller
{
    public function registered()
    {
        $testreg = Manage_Test::all();
        return view('patient.testregister')->with('testreg', $testreg);
    }
}
