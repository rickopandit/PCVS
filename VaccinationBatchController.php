<?php

namespace App\Http\Controllers\Admin;

use App\Models\Vaccinations;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VaccinationBatchController extends Controller
{
    public function requested()
    {
        $vaccination = Vaccinations::all();
        return view('admin.vaccinebatchinfo')->with('vaccination',$vaccination);
    }
    public function requestedit($id)
    {
        $id = Vaccinations::findOrFail('id');
        return view('admin.vbatch-info-edit');
    }
}
