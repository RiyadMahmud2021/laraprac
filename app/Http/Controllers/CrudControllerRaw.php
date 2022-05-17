<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudControllerRaw extends Controller
{
    public function view(){
        // $jsonData= DB::select('select * from students where name=?',['Rain']);
        // $jsonString= json_encode($jsonData);
        // $selectData=json_decode($jsonString);

        // Diff. Query Prac
        $data['showData'] = DB::select('select * from students');
        $data['showData'] = DB::select('select * from students WHERE class= ?', ['10']);
        // Diff. Query Prac

        // echo '<pre>';0
        // var_dump($data);
        // '</pre>';
        // return view('rowQueryCrud/viewData',compact('data')); // compact not for associatuive array
        return view('rowQueryCrud/viewData',$data);
    }

    public function insert(){
        return view('rowQueryCrud/add_data');
    }

}