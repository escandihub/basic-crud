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
            'objective' => $request->input('objective'),
            'location' => $request->input('location'),
            'number_guests' => $request->input('number_guests'),
            'date' => $request->input('date'),
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
        return response()->json(['party'=>$party]);
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

       $party->update([
            'name' => $request->input('name'),
            'objective' => $request->input('objective')]);

        // some validation here
        return response()->json([
            'message' => "evento actualizado",
            'party'=>$party
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
        // $party->delete();
        return response()->json([
            'message' => "evento se elimino"
        ]);
    }
}
