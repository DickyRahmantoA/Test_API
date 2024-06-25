<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Http\Requests\StoreDesaRequest;
use App\Http\Requests\UpdateDesaRequest;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Desa::all();
        return response()->json($response);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $response = new Desa;
        $response->code = $request->code;
        $response->district_code = $request->district_code;
        $response->name = $request->name;
        return response()->json($response);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $response = Desa::find($id);
        return response()->json($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $response = Desa::find($request->id);
        $response->name = $request->name;
        $response->save();
        return response()->json($response);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Desa $desa)
    {
        $response = $desa->delete();
        return response()->json($response);
    }
}
