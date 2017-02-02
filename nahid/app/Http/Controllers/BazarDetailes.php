<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BazarDetailes extends Controller
{
    public function bazar_details_list(){

    	return view('layouts.bazar_details.bazar_details_list');
    }

     public function bazar_details_add(){

    	return view('layouts.bazar_details.bazar_details_add');
    }  
}
