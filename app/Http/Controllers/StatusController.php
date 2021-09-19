<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reading;

class StatusController extends Controller
{
    //ping function to issue get request to fetch the latest data in Database
    function ping()
    {
        $temp = Reading::orderBy('id', 'desc')->limit(1)->get();
        return $temp;
    }
}
