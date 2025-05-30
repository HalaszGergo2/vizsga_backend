<?php

namespace App\Http\Controllers;

use App\Models\szavak;
use Illuminate\Http\Request;

class SzavakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return szavak::with('tema')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $szavak = szavak::where('temaId', $id)->get();
        return response()->json($szavak);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
