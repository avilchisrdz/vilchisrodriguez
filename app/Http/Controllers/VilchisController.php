<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VilchisController extends Controller
{
    public function getVilchis(){
    	return view('vilchis');
    }
}
