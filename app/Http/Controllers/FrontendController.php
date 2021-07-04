<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reading;

class FrontendController extends Controller
{
    public function live(){

         $readings = Reading::orderBy('id', 'desc')->limit(1)->get();
         //echo $temp;
          return view('live.live')->withReadings($readings);
    }
}
