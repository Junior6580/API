<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Apprentices()
    {
        $apprentices = Apprentice::all();
        return response()->json($apprentices);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function training_program($training_program)
    {
        $apprentices = Apprentice::where('training_program', $training_program)->get();
        return $apprentices;
    }

    /**
     * Display the specified resource.
     */
    public function show(Apprentice $apprentice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Apprentice $apprentice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apprentice $apprentice)
    {
        //
    }
}
