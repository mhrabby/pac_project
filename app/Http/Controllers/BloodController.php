<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\blood;

class BloodController extends Controller
{
    public function addBloodInfo(){
    	return view('addBloodInfo');
    }

    public function input_data(Request $req){
    	$blo = new Blood;
    	$blo->doner_name = $req->doner_name;
    	$blo->blood_group = $req->blood_group;
    	$blo->phone = $req->phone;
    	$blo->address = $req->address;

    	$blo->save();
    	return redirect()->action('HomeController@index')->with('status','Successfully added');
    }

    public function blood_list()
    {
    	$blos = Blood::all();
    	return view('bloodList',compact('blos'));
    }
}
