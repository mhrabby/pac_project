<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CellController extends Controller
{
    public function cell()
    {
    	return view('cell');
    }
    public function cell(Request $req){
        return view('cell');
    }

    public function types()
    {
        return view('bloodtype');
    }

    public function person()
    {
        return view('person');
    }






}
