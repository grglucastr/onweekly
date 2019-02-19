<?php 

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;


class TypeController extends Controller 
{

  public function deleteType($id) 
  {
    $type = Type::findOrFail($id);
    $type->active = false;
    $type->save();
    return response()->json($type->refresh(), 200);
  }

  public function showAllTypes()
  {
    return response()->json(Type::where('active', 1)->get());
  }

  public function showOneType($id)
  { 
    $type = Type::findOrFail($id);
    return response()->json($type, 200);

  }

  public function addType(Request $request)
  {
    $type = Type::create($request->all());
    return response()->json($type, 201);
  }

  public function updateType($id, Request $request)
  {
    
    $type = Type::findOrFail($id);
    $type->update($request->all());
    return response()->json($type, 200);

  }

}