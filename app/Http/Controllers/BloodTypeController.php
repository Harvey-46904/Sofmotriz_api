<?php

namespace App\Http\Controllers;

use App\Models\Blood_type;
use Illuminate\Http\Request;

class BloodTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $BloodTypedata=Blood_type::all();
        return response($BloodTypedata,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $BloodTypedata=new Blood_type;
        $BloodTypedata->type=$request->type;
        $BloodTypedata->save();
        return response(["data"=>"Save Data"],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blood_type  $blood_type
     * @return \Illuminate\Http\Response
     */
    public function show($blood_type)
    {
        $BloodTypedata=Blood_type::where("id_blood_types","=",$blood_type)->first();
        return response($BloodTypedata,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blood_type  $blood_type
     * @return \Illuminate\Http\Response
     */
    public function edit(Blood_type $blood_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blood_type  $blood_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$blood_type)
    {
        $BloodTypedata=Blood_type::where("id_blood_types","=",$blood_type)->first();
        $BloodTypedata->type=$request->type;
        $BloodTypedata->save();
        return response(["data"=>"Update Data"],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blood_type  $blood_type
     * @return \Illuminate\Http\Response
     */
    public function destroy($blood_type)
    {
        $BloodTypedata=Blood_type::where("id_blood_types","=",$blood_type)->first();
        $BloodTypedata->delete();
         return response(["data"=>"Deleted Data"],200);
    }
}
