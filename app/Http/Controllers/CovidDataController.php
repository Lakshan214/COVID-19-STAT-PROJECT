<?php

namespace App\Http\Controllers;

use App\Models\CovidData;
use Illuminate\Http\Request;

class CovidDataController extends Controller
{
      public function index()
    {
        $covidData = CovidData::latest()->first();
         
        return view('home', compact('covidData'));
    }

   
}

