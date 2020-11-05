<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reading;

class APIController extends Controller
{
    public function postReading(Request $request){
        $data = $request->validate([
            'time' => 'required|date_format:Y-m-d H:i:s',
            'bat_voltage' => 'required|max:255',
            'cmd_2101' => 'required',
            'cmd_2102' => 'required',
            'cmd_2103' => 'required',
            'cmd_2104' => 'required',
            'cmd_2105' => 'required',
        ]);
        $reading = new Reading;
        $reading->fill($data);
        $reading->save();
        return $reading;
    }
}
