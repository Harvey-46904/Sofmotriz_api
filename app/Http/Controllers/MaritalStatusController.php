<?php

namespace App\Http\Controllers;

use App\Models\Marital_status;
use Illuminate\Http\Request;

class MaritalStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $MaritalStatusdata=Marital_status::all();
        return response($MaritalStatusdata,200);
    }
    public function store(Request $request)
    {
        $MaritalStatusdata=new Marital_status;
        $MaritalStatusdata->state=$request->state;
        $MaritalStatusdata->save();
        return response(["data"=>"Save Data"],200);

    }
    public function show($Marital_status)
    {
        $MaritalStatusdata=Marital_status::where("id_marital_statuses","=",$Marital_status)->first();
        return response($MaritalStatusdata,200);
    }
    public function update(Request $request,$Marital_status)
    {
        $MaritalStatusdata=Marital_status::where("id_marital_statuses","=",$Marital_status)->first();
        $MaritalStatusdata->state=$request->state;
        $MaritalStatusdata->save();
        return response(["data"=>"Update Data"],200);
    }
    public function destroy($Marital_status)
    {
        $MaritalStatusdata=Marital_status::where("id_marital_statuses","=",$Marital_status)->first();
        $MaritalStatusdata->delete();
         return response(["data"=>"Deleted Data"],200);
    }
}
