<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Addition extends Controller
{
    public function additional_list(){

    	  return view('layouts.additional_views.additional_list');
    }

    public function additional_add(){

    	  return view('layouts.additional_views.additional_add');
    }
}
