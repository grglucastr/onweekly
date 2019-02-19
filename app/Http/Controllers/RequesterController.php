<?php 

namespace App\Http\Controllers;

use App\Requester;
use Illuminate\Http\Request;

class RequesterController extends Controller
{
  public function showAllRequesters()
  {
    return response()->json(Requester::all());
  }

  public function showOneRequester($id)
  {
    $requester = Requester::findOrFail($id);
    return response()->json($requester, 200);
    
  }

  public function addRequester(Request $request)
  {
    $requester = Requester::create($request->all());
    return response()->json($requester, 201);
  }

}