<?php

namespace App\Http\Controllers;

use App\Models\profesional;
use Illuminate\Http\Request;

class ProfesionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=profesional::all();
        return response($datos);
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
        $datos=new profesional;
        $datos->nombre=$request->nombre;
        $datos->apellido=$request->apellido;
        $datos->save();
        return response(["data"=>"Save Data"],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\profesional  $profesional
     * @return \Illuminate\Http\Response
     */
    public function show(profesional $profesional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\profesional  $profesional
     * @return \Illuminate\Http\Response
     */
    public function edit(profesional $profesional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\profesional  $profesional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, profesional $profesional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\profesional  $profesional
     * @return \Illuminate\Http\Response
     */
    public function destroy(profesional $profesional)
    {
        //
    }
}
