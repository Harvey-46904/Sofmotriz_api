<?php

namespace App\Http\Controllers;

use App\Models\Examination_status;
use Illuminate\Http\Request;

class ExaminationStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ExaminationStatusdata=Examination_status::all();
        return response($ExaminationStatusdata,200);
    }
    public function store(Request $request)
    {
        $ExaminationStatusdata=new Examination_status;
        $ExaminationStatusdata->state=$request->state;
        $ExaminationStatusdata->save();
        return response(["data"=>"Save Data"],200);

    }
    public function show($Examination_status)
    {
        $ExaminationStatusdata=Examination_status::where("id_examination_statuses","=",$Examination_status)->first();
        return response($ExaminationStatusdata,200);
    }
    public function update(Request $request,$Examination_status)
    {
        $ExaminationStatusdata=Examination_status::where("id_examination_statuses","=",$Examination_status)->first();
        $ExaminationStatusdata->state=$request->state;
        $ExaminationStatusdata->save();
        return response(["data"=>"Update Data"],200);
    }
    public function destroy($Examination_status)
    {
        $ExaminationStatusdata=Examination_status::where("id_examination_statuses","=",$Examination_status)->first();
        $ExaminationStatusdata->delete();
         return response(["data"=>"Deleted Data"],200);
    }
}
