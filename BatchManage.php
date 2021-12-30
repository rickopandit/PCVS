<?php

namespace App\Http\Controllers\Admin;

use App\Models\Batchs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BatchManage extends Controller
{
    public function index()
    {
        $batch = Batchs::all();
        return view('admin.batch')
            ->with('batch', $batch)
        ;
    }
    public function savebatch(Request $request)
    {
        $batch = new Batchs;


        $batch->batchNo =  $request->input('batchNo');
        $batch->expiryDate = $request->input('expiryDate');
        $batch->quantityAvailable = $request->input('quantityAvailable');
        $batch->quantityAdministered = $request->input('quantityAdministered');
        $batch->vaccineName = $request->input('vaccineName');
        $batch->centreName = $request->input('centreName');

        $batch->save();
        return redirect('/batch')->with('success','New Vaccine Batch Added!');
    }
}
