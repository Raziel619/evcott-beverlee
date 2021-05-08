<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reading;



class APIController extends Controller
{
    public function postReading(Request $request){

        //Process SOC Data
        $dx_2105 = $request->input('cmd_2105');
        if(strpos($dx_2105,"7EC 24") === FALSE){$dx_2105= "N/A";}
        else{$dx_2105= hexdec(substr($dx_2105,(strpos($dx_2105,"7EC 24")+25),2)) / 2 ;}
        $request->merge(["soc"=>$dx_2105]);

        //Process RPM Data
        $dx_2101 = $request->input('cmd_2101');
        if(strpos($dx_2101,"7EC 28") === FALSE){$dx_2101= "N/A";}
        else{$dx_2101= hexdec(substr($dx_2101,(strpos($dx_2101,"7EC 28")+7),2).substr($dx_2101,(strpos($dx_2101,"7EC 28")+10),2));}
        $request->merge(["rpm"=>$dx_2101]);
        //$data = $request->all();

        $data = $request->validate([
            'time' => 'required|date_format:Y-m-d H:i:s',
            'bat_voltage' => 'required|max:255',
            'cmd_2101' => 'required',
            'cmd_2102' => 'required',
            'cmd_2103' => 'required',
            'cmd_2104' => 'required',
            'cmd_2105' => 'required',
            'soc' => 'required',
            'rpm' => 'required',
        ]);
        
        $reading = new Reading;
        $reading->fill($data);
        $reading->save();
        return $reading;
    }
}
