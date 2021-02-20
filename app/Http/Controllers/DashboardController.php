<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dashboard(Request $request){

    $request->validate([
      'name' => 'required',
      'age' => 'required|numeric',
      'weight' => 'required|numeric',
      'height' => 'required|numeric|between:0,99.99',
      'gender' => 'required|integer|min:1|max:2',
    ]);

     $name = $request->name;
     $age = $request->age;
     $weight = $request->weight;
     $height = $request->height;
     $gender = $request->gender;
     $height_in_cm = $height*30.48;
     $height_in_meter = $height_in_cm*0.01;
    return view('dashboard/dashboard',compact('name','age','weight','height','gender','height_in_cm','height_in_meter'));


    }
    function ReturnHome(){
      return view('welcome');
    }

    function notice(){
      return back()->with('notice',' More application are coming soon but for now, you can visit my store');
    }
    function about(){
      return view('pages.about');
    }
    function chat(){
      return view('pages.chat');
    }
}
