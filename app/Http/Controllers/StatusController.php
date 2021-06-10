<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reading;

class StatusController extends Controller
{
    function ping()
    {
        $temp = Reading::orderBy('id', 'desc')->limit(1)->get();
        return $temp;
    }
}
