<?php

namespace App\Http\Controllers;

use App\Models\Document_type;
use Illuminate\Http\Request;

class DocumentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DocumentTypedata=Document_type::all();
        return response($DocumentTypedata,200);
    }
    public function store(Request $request)
    {
        $DocumentTypedata=new Document_type;
        $DocumentTypedata->type=$request->type;
        $DocumentTypedata->save();
        return response(["data"=>"Save Data"],200);

    }
    public function show($Document_type)
    {
        $DocumentTypedata=Document_type::where("id_document_types","=",$Document_type)->first();
        return response($DocumentTypedata,200);
    }
    public function update(Request $request,$Document_type)
    {
        $DocumentTypedata=Document_type::where("id_document_types","=",$Document_type)->first();
        $DocumentTypedata->type=$request->type;
        $DocumentTypedata->save();
        return response(["data"=>"Update Data"],200);
    }
    public function destroy($Document_type)
    {
        $DocumentTypedata=Document_type::where("id_document_types","=",$Document_type)->first();
        $DocumentTypedata->delete();
         return response(["data"=>"Deleted Data"],200);
    }
}
