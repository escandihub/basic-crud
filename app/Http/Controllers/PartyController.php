<?php

namespace App\Http\Controllers;

use App\Models\Party;
use Illuminate\Http\Request;

class PartyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'data' =>  Party::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Party::create([
            'name' => $request->input('name'),
            'objective' => $request->input('objetivo'),
            'location' => $request->input('lugar'),
            'number_guests' => $request->input('num_invitados'),
            'date' => $request->input('fecha_programada'),
        ]);

        //some validation here

        return response()->json(['message' => "Se guardo, Correctamente"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Party  $party
     * @return \Illuminate\Http\Response
     */
    public function show(Party $party)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Party  $party
     * @return \Illuminate\Http\Response
     */
    public function edit(Party $party)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Party  $party
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Party $party)
    {

        Party::where('id', $id)->update([
            'name' => $request->input('name'),
            'objective' => $request->input('cantidad')]);

        // some validation here
        return response()->json([
            'message' => "evento actualizado"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Party  $party
     * @return \Illuminate\Http\Response
     */
    public function destroy(Party $party)
    {

        Party::withTrashed()->where('id', $party->id)->get();

        return response()->json([
            'message' => "evento se elimino"
        ]);
    }
}
