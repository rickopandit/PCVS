<?php

namespace App\Http\Controllers\Admin;

use App\Models\HCentre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CentreController extends Controller
{
    public function index()
    {
        $h_centre = HCentre::all();
        return view('admin.healthcentre')
            ->with('h_centre', $h_centre)
        ;
    }
    public function addcentre(Request $request)
    {
        $h_centre = new HCentre;

        $h_centre->centreName = $request->input('centreName');
        $h_centre->address = $request->input('address');

        $h_centre->save();
        return redirect('/healthcentre')->with('status', 'New Centre added!');
    }
}
