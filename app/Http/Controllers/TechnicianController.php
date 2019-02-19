<?php 

namespace App\Http\Controllers;

use App\Technician;
use Illuminate\Http\Request;

class TechnicianController extends Controller 
{
    
    public function showAllTechnicians()
    {
        return response()->json(Technician::where('active', 1)->get());
    }

    public function showOneTechnician($id)
    {
        $technician = Technician::findOrFail($id);
        return response()->json($technician, 200);
    }

    public function  addTechnician(Request $request)
    {
        $technician = Technician::create($request->all());
        return response()->json($technician, 201);
    }

    public function deleteTechnician($id){
        $technician = Technician::findOrFail($id);
        $technician->active = false;
        $technician->save();
        return response()->json($technician->refresh(), 200);
    }

}