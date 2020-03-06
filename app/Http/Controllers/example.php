<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Vall;
use Validator;

class example extends Controller
{
   public function index(){

     return view('formlar');
   }

   public function post(Vall $request){
     $isValidate= $request->validated();

     if($isValidate){

       return "Ok";

     }else{

       return "Error";
     }

   }

   // $rules=Validator::make($request->all(),$validationRules,[
   //  'min'=>"Ad soyad minumum 3 xarekter olmalidir"
   // ]);
   // if($rules->fails()){
   //   return redirect()->back()->withErrors($rules)->withInput();
   // }else{
   //   return  "ok";
   // }
}
