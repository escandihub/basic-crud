<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Things;

class ThingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cosas = Things::find(1)->belongToParty;
        return response()->json([
            'data' => $cosas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //retunt a view 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Things::create([
            'name' => $request->input('name'),
            'amount' => $request->input('cantidad')
        ]);

        //some validation here

        return response()->json(['message' => "Se guardo, Correctamente"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // particular 
        return response()->json([
            'data' => Things::find($id)->belongToParty
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Things $things)
    {
        $things->update($request->all());
        // Things::where('id', $id)->update(['name' => $request->input('name'), 'amount' => $request->input('cantidad')]);

        // some validation here
        return response()->json([
            'menssage' => "se actualizo"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
