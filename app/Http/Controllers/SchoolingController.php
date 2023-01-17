<?php

namespace App\Http\Controllers;

use App\Models\Schooling;
use Illuminate\Http\Request;

   
class SchoolingController extends Controller
{
    public function index()
    {
        $schoolingdata=Schooling::all();
        return response($schoolingdata,200);
    }
    public function store(Request $request)
    {
        $schooling_data=new Schooling;
        $schooling_data->level_schooling=$request->level_schooling;
        $schooling_data->save();
        return response(["data"=>"Save Data"],200);

    }
    public function show($schooling)
    {
        $schoolingdata=Schooling::where("id_Schooling","=",$schooling)->first();
        return response($schoolingdata,200);
    }
    public function update(Request $request,$schooling)
    {
        $schoolingdata=Schooling::where("id_Schooling","=",$schooling)->first();
        $schoolingdata->level_schooling=$request->level_schooling;
        $schoolingdata->save();
        return response(["data"=>"Update Data"],200);
    }
    public function destroy($schooling)
    {
        $schoolingdata=Schooling::where("id_Schooling","=",$schooling)->first();
        $schoolingdata->delete();
         return response(["data"=>"Deleted Data"],200);
    }
}
