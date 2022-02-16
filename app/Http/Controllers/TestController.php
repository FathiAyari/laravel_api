<?php

namespace App\Http\Controllers;
use App\Models\AbirModel;
use Illuminate\Http\Request;

class TestController extends Controller
{
   
public function index(Request $request){
    $name=$request->input("name");
    $test=AbirModel::where('name',$name)->get();
   /*  select * from abir_models where("name"==$name) */
   if (count($test)==0) {
  
   }
    return $test;
}

}