<?php

namespace App\Http\Controllers\Admin;

use App\Models\Vaccine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VaccineController extends Controller
{
    public function index()
    {
        $vaccine = Vaccine::all();
        return view('admin.vaccine')
            ->with('vaccine', $vaccine)
        ;
    }
    public function addvaccine(Request $request)
    {
        $vaccine = new Vaccine;

        $vaccine->manufacturer = $request->input('manufacturer');
        $vaccine->vaccineName = $request->input('vaccineName');

        $vaccine->save();
        return redirect('/vaccine')->with('status', 'New Vaccine added!');
    }
    public function deletevaccine($vaccineName)
    {
        $vaccine = Vaccine::findOrFail($vaccineName);
        $vaccine->delete();
        return redirect('/vaccine')->with('status', 'Vaccine Removed!');
    }
}
