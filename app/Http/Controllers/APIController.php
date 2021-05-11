<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reading;



class APIController extends Controller
{
    public function postReading(Request $request){
        //Temp Data Storage for Processing
        $dx_2101=$request->input('cmd_2101');
        $dx_2102=$request->input('cmd_2102');
        $dx_2103=$request->input('cmd_2103');
        $dx_2104=$request->input('cmd_2104');
        $dx_2105=$request->input('cmd_2105');

        //Process SOC Data
        $var= $dx_2105;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 24")+25),2)) / 2 ;}
        $request->merge(["soc"=>$var]);

        //Process RPM Data
        $var= $dx_2101;
        if(strpos($var,"7EC 28") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 28")+7),2).substr($var,(strpos($var,"7EC 28")+10),2));}
        $request->merge(["rpm"=>$var]);

        //Process SOC(BMS) Data
        $var= $dx_2101;
        if(strpos($var,"7EC 21") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 21")+7),2)) / 2 ;}
        $request->merge(["soc_bms"=>$var]);

        //Process Available Charge Power Data
        $var= $dx_2101;
        if(strpos($var,"7EC 21") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 21")+10),2).substr($var,(strpos($var,"7EC 21")+13),2))/100;}
        $request->merge(["acp"=>$var]);

        //Process Available Discharge Power Data
        // $var= $dx_2101;
        // if(strpos($var,"7EC 21") === FALSE){$var= "N/A";}
        // else{$var= hexdec(substr($var,(strpos($var,"7EC 21")+16),2).substr($var,(strpos($var,"7EC 21")+19),2))/100;}
        $request->merge(["adp"=>$var]);


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
            'soc_bms' => 'required',
            'acp' => 'required',
            'adp' => 'required',
        ]);
        
        $reading = new Reading;
        $reading->fill($data);
        $reading->save();
        return $reading;
    }
}
