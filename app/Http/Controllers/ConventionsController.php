<?php

namespace App\Http\Controllers;

use App\Models\conventions;
use Illuminate\Http\Request;

class ConventionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Conventionsdata=conventions::all();
        return response($Conventionsdata,200);
    }
    public function store(Request $request)
    {
        $Conventionsdata=new conventions;
        $Conventionsdata->company_name=$request->company_name;
        $Conventionsdata->nit=$request->nit;
        $Conventionsdata->address=$request->address;
        $Conventionsdata->department=$request->department;
        $Conventionsdata->city=$request->city;
        $Conventionsdata->phone=$request->phone;
        $Conventionsdata->representative=$request->representative;
        $Conventionsdata->state=$request->state;
        $Conventionsdata->save();
        return response(["data"=>"Save Data"],200);

    }
    public function show($conventions)
    {
        $Conventionsdata=conventions::where("id_conventions	","=",$conventions)->first();
        return response($Conventionsdata,200);
    }
    public function update(Request $request,$conventions)
    {
        $Conventionsdata=conventions::where("id_conventions	","=",$conventions)->first();
        $Conventionsdata->company_name=$request->company_name;
        $Conventionsdata->nit=$request->nit;
        $Conventionsdata->address=$request->address;
        $Conventionsdata->department=$request->department;
        $Conventionsdata->city=$request->city;
        $Conventionsdata->phone=$request->phone;
        $Conventionsdata->representative=$request->representative;
        $Conventionsdata->state=$request->state;
        $Conventionsdata->save();
        return response(["data"=>"Update Data"],200);
    }
    public function destroy($conventions)
    {
        $Conventionsdata=conventions::where("id_conventions	","=",$conventions)->first();
        $Conventionsdata->delete();
         return response(["data"=>"Deleted Data"],200);
    }
}
