<?php

namespace App\Http\Controllers;

use App\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{


  // Save the contribution 2
  public function showAllStatus()
  {
    return response()->json(Status::where('active', 1)->get());
  }

  public function showOneStatus($id)
  {
    return response()->json(Status::find($id));
  }

  public function addStatus(Request $request)
  {
    $status = Status::create($request->all());
    return response()->json($status, 201);
  }
  
  public function updateStatus($id, Request $request)
  {
    $status = Status::findOrFail($id);
    $status->update($request->all());
    return response()->json($status, 200);
  }

  public function deleteStatus($id) 
  {
    $status = Status::findOrFail($id);
    $status->active = false;
    $status->save();
    return response()->json($status->refresh(), 200);
  }
}