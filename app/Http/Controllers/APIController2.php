<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reading2;



class APIController2 extends Controller
{
    public function postReading2(Request $request){
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
        $var= $dx_2101;
        if(strpos($var,"7EC 21") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 21")+16),2).substr($var,(strpos($var,"7EC 21")+19),2))/100;}
        $request->merge(["adp"=>$var]);

        //Process Battery Current Data
        $var= $dx_2101;
        if(strpos($var,"7EC 21") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 21")+16),2).substr($var,(strpos($var,"7EC 21")+19),2))/100;}
        $request->merge(["adp"=>$var]);

        //Process Battery Current Data
        $var= $dx_2101;
        if(strpos($var,"7EC 21") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 21")+25),2).substr($var,(strpos($var,"7EC 22")+7),2))/10;}
        $request->merge(["battery_current"=>$var]);

        //Process Battery Voltage Data
        $var= $dx_2101;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+10),2).substr($var,(strpos($var,"7EC 22")+13),2))/10;}
        $request->merge(["battery_voltage"=>$var]);

        //Process Battery Max Temp Data
        $var= $dx_2101;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+16),2));}
        $request->merge(["BatTmpMX"=>$var]);

        //Process Battery Min Temp Data
        $var= $dx_2101;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+19),2));}
        $request->merge(["BatTmpMI"=>$var]);

        //Process Battery Module 1 Temp Data
        $var= $dx_2101;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+22),2));}
        $request->merge(["bmt1"=>$var]);

        //Process Battery Module 2 Temp Data
        $var= $dx_2101;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+25),2));}
        $request->merge(["bmt2"=>$var]);

        //Process Battery Module 3 Temp Data
        $var= $dx_2101;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+7),2));}
        $request->merge(["bmt3"=>$var]);

        //Process Battery Module 4 Temp Data
        $var= $dx_2101;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+10),2));}
        $request->merge(["bmt4"=>$var]);

        //Process Battery Module 5 Temp Data
        $var= $dx_2101;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+13),2));}
        $request->merge(["bmt5"=>$var]);

        //Process Battery Inlet Temp Data
        $var= $dx_2101;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+19),2));}
        $request->merge(["BatTmpIN"=>$var]);

        //Process Maximum Cell Voltage Data
        $var= $dx_2101;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+22),2))/50;}
        $request->merge(["MXCV"=>$var]);

        //Process Minimum Cell Voltage Data
        $var= $dx_2101;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 24")+7),2))/50;}
        $request->merge(["MICV"=>$var]);

        //Process Maximum Cell Voltage No. Data
        $var= $dx_2101;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+25),2));}
        $request->merge(["MXCVno"=>$var]);

        //Process Minimum Cell Voltage No. Data
        $var= $dx_2101;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 24")+10),2));}
        $request->merge(["MICVno"=>$var]);

        //Process Fan Status Data
        $var= $dx_2101;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var=hexdec(substr($var,(strpos($var,"7EC 24")+13),2));}
        $request->merge(["fan_status"=>$var]);

        //Process Fan Feedback Signal Data
        $var= $dx_2101;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var=hexdec(substr($var,(strpos($var,"7EC 24")+16),2));}
        $request->merge(["fan_fbsignal"=>$var]);

        //Process Auxillary Battery Voltage via OBDII Data
        $var= $dx_2101;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var=hexdec(substr($var,(strpos($var,"7EC 24")+19),2))/10;}
        $request->merge(["obdabv"=>$var]);

        //Process Cumulative Charge Current
        $var= $dx_2101;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 24")+22),2).substr($var,(strpos($var,"7EC 24")+25),2).substr($var,(strpos($var,"7EC 25")+7),2).substr($var,(strpos($var,"7EC 25")+10),2))/10;}
        $request->merge(["ccc"=>$var]);

        //Process Cumulative Discharge Current
        $var= $dx_2101;
        if(strpos($var,"7EC 25") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 25")+13),2).substr($var,(strpos($var,"7EC 25")+16),2).substr($var,(strpos($var,"7EC 25")+19),2).substr($var,(strpos($var,"7EC 25")+22),2))/10;}
        $request->merge(["cdc"=>$var]);

        //Process Cumulative Charge Power
        $var= $dx_2101;
        if(strpos($var,"7EC 25") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 25")+25),2).substr($var,(strpos($var,"7EC 26")+7),2).substr($var,(strpos($var,"7EC 26")+10),2).substr($var,(strpos($var,"7EC 26")+13),2))/10;}
        $request->merge(["ccp"=>$var]);

        //Process Cumulative Discharge Power
        $var= $dx_2101;
        if(strpos($var,"7EC 26") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 26")+16),2).substr($var,(strpos($var,"7EC 26")+19),2).substr($var,(strpos($var,"7EC 26")+22),2).substr($var,(strpos($var,"7EC 26")+25),2))/10;}
        $request->merge(["cdp"=>$var]);

        //Process Cumulative Operating Time
        $var= $dx_2101;
        if(strpos($var,"7EC 27") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 27")+7),2).substr($var,(strpos($var,"7EC 27")+10),2).substr($var,(strpos($var,"7EC 27")+13),2).substr($var,(strpos($var,"7EC 27")+16),2))/86400;}
        $request->merge(["cot"=>number_format($var,2, '.', ',')]);

        //Process Inverter Capacitor Voltage
        $var= $dx_2101;
        if(strpos($var,"7EC 27") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 27")+22),2).substr($var,(strpos($var,"7EC 27")+25),2))/1;}
        $request->merge(["icv"=>$var]);

        //Process Isolation Resistance
        $var= $dx_2101;
        if(strpos($var,"7EC 28") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 28")+19),2).substr($var,(strpos($var,"7EC 28")+22),2))/1;}
        $request->merge(["ir"=>$var]);

        //Process Battery Max Temp 2 Data
        $var= $dx_2105;
        if(strpos($var,"7EC 21") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 21")+25),2));}
        $request->merge(["BatTmpMX2"=>$var]);

        //Process Battery Max Temp 2 Data
        $var= $dx_2105;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+7),2));}
        $request->merge(["BatTmpMI2"=>$var]);

        //Process Battery Module 6 Temp Data
        $var= $dx_2105;
        if(strpos($var,"7EC 21") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 21")+22),2));}
        $request->merge(["bmt6"=>$var]);

        //Process Battery Module 7 Temp Data
        $var= $dx_2105;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+10),2));}
        $request->merge(["bmt7"=>$var]);

        //Process Battery Module 8 Temp Data
        $var= $dx_2105;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+13),2));}
        $request->merge(["bmt8"=>$var]);

        //Process Battery Module 9 Temp Data
        $var= $dx_2105;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+16),2));}
        $request->merge(["bmt9"=>$var]);

        //Process Battery Module 10 Temp Data
        $var= $dx_2105;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+19),2));}
        $request->merge(["bmt10"=>$var]);

        //Process Available Charge Power 2 Data
        $var= $dx_2105;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+22),2).substr($var,(strpos($var,"7EC 22")+25),2))/100;}
        $request->merge(["acp2"=>$var]);

        //Process Available Discharge Power 2 Data
        $var= $dx_2105;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+7),2).substr($var,(strpos($var,"7EC 23")+10),2))/100;}
        $request->merge(["adp2"=>$var]);

        //Process Battery Cell Voltage Deviation Data
        $var= $dx_2105;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+13),2));}
        $request->merge(["bcvd"=>$var]);

        //Process Quick Charge Normal Status Data
        $var= $dx_2105;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+16),2));}
        $request->merge(["qcns"=>$var]);

        //Process Airbag H/wire Duty Data
        $var= $dx_2105;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+19),2));}
        $request->merge(["abwd"=>$var]);

        //Process Battery Heater Temperature 1 Data
        $var= $dx_2105;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+22),2));}
        $request->merge(["bht1"=>$var]);

        //Process Battery Heater Temperature 2 Data
        $var= $dx_2105;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+25),2));}
        $request->merge(["bht2"=>$var]);

        //Process State of Health / Max Deterioration Data
        $var= $dx_2105;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 24")+7),2).substr($var,(strpos($var,"7EC 24")+10),2))/10;}
        $request->merge(["soh"=>$var]);

        //Process Max Deterioration Cell no. Data
        $var= $dx_2105;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 24")+13),2));}
        $request->merge(["mdc"=>$var]);

        //Process Min Deterioration Data
        $var= $dx_2105;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 24")+16),2).substr($var,(strpos($var,"7EC 24")+19),2))/10;}
        $request->merge(["md"=>$var]);

        //Process Min Deterioration Cell no. Data
        $var= $dx_2105;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 24")+22),2));}
        $request->merge(["midc"=>$var]);

        //Process Battery Cell Voltage 1 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 21") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 21")+7),2))/50;}
        $request->merge(["bcv1"=>$var]);

        //Process Battery Cell Voltage 2 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 21") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 21")+10),2))/50;}
        $request->merge(["bcv2"=>$var]);

        //Process Battery Cell Voltage 3 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 21") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 21")+13),2))/50;}
        $request->merge(["bcv3"=>$var]);

        //Process Battery Cell Voltage 4 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 21") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 21")+16),2))/50;}
        $request->merge(["bcv4"=>$var]);

        //Process Battery Cell Voltage 5 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 21") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 21")+19),2))/50;}
        $request->merge(["bcv5"=>$var]);

        //Process Battery Cell Voltage 6 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 21") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 21")+22),2))/50;}
        $request->merge(["bcv6"=>$var]);

        //Process Battery Cell Voltage 7 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 21") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 21")+25),2))/50;}
        $request->merge(["bcv7"=>$var]);

        //Process Battery Cell Voltage 8 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+7),2))/50;}
        $request->merge(["bcv8"=>$var]);

        //Process Battery Cell Voltage 9 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+10),2))/50;}
        $request->merge(["bcv9"=>$var]);

        //Process Battery Cell Voltage 10 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+13),2))/50;}
        $request->merge(["bcv10"=>$var]);

        //Process Battery Cell Voltage 11 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+16),2))/50;}
        $request->merge(["bcv11"=>$var]);

        //Process Battery Cell Voltage 12 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+19),2))/50;}
        $request->merge(["bcv12"=>$var]);

        //Process Battery Cell Voltage 13 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+22),2))/50;}
        $request->merge(["bcv13"=>$var]);

        //Process Battery Cell Voltage 14 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+25),2))/50;}
        $request->merge(["bcv14"=>$var]);

        //Process Battery Cell Voltage 15 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+7),2))/50;}
        $request->merge(["bcv15"=>$var]);

        //Process Battery Cell Voltage 16 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+10),2))/50;}
        $request->merge(["bcv16"=>$var]);

        //Process Battery Cell Voltage 17 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+13),2))/50;}
        $request->merge(["bcv17"=>$var]);

        //Process Battery Cell Voltage 18 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+16),2))/50;}
        $request->merge(["bcv18"=>$var]);

        //Process Battery Cell Voltage 19 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+19),2))/50;}
        $request->merge(["bcv19"=>$var]);

        //Process Battery Cell Voltage 20 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+22),2))/50;}
        $request->merge(["bcv20"=>$var]);

        //Process Battery Cell Voltage 21 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+25),2))/50;}
        $request->merge(["bcv21"=>$var]);

        //Process Battery Cell Voltage 22 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 24")+7),2))/50;}
        $request->merge(["bcv22"=>$var]);

        //Process Battery Cell Voltage 23 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 24")+10),2))/50;}
        $request->merge(["bcv23"=>$var]);

        //Process Battery Cell Voltage 24 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 24")+13),2))/50;}
        $request->merge(["bcv24"=>$var]);

        //Process Battery Cell Voltage 25 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 24")+16),2))/50;}
        $request->merge(["bcv25"=>$var]);

        //Process Battery Cell Voltage 26 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 24")+19),2))/50;}
        $request->merge(["bcv26"=>$var]);

        //Process Battery Cell Voltage 27 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 24")+22),2))/50;}
        $request->merge(["bcv27"=>$var]);

        //Process Battery Cell Voltage 28 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 24")+25),2))/50;}
        $request->merge(["bcv28"=>$var]);

        //Process Battery Cell Voltage 29 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 25") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 25")+7),2))/50;}
        $request->merge(["bcv29"=>$var]);

        //Process Battery Cell Voltage 30 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 25") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 25")+10),2))/50;}
        $request->merge(["bcv30"=>$var]);

        //Process Battery Cell Voltage 31 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 25") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 25")+13),2))/50;}
        $request->merge(["bcv31"=>$var]);

        //Process Battery Cell Voltage 32 Data
        $var= $dx_2102;
        if(strpos($var,"7EC 25") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 25")+16),2))/50;}
        $request->merge(["bcv32"=>$var]);

        //Process Battery Cell Voltage 33 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 21") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 21")+7),2))/50;}
        $request->merge(["bcv33"=>$var]);

        //Process Battery Cell Voltage 34 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 21") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 21")+10),2))/50;}
        $request->merge(["bcv34"=>$var]);

        //Process Battery Cell Voltage 35 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 21") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 21")+13),2))/50;}
        $request->merge(["bcv35"=>$var]);

        //Process Battery Cell Voltage 36 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 21") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 21")+16),2))/50;}
        $request->merge(["bcv36"=>$var]);

        //Process Battery Cell Voltage 37 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 21") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 21")+19),2))/50;}
        $request->merge(["bcv37"=>$var]);

        //Process Battery Cell Voltage 38 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 21") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 21")+22),2))/50;}
        $request->merge(["bcv38"=>$var]);

        //Process Battery Cell Voltage 39 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 21") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 21")+25),2))/50;}
        $request->merge(["bcv39"=>$var]);

        //Process Battery Cell Voltage 40 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+7),2))/50;}
        $request->merge(["bcv40"=>$var]);

        //Process Battery Cell Voltage 41 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+10),2))/50;}
        $request->merge(["bcv41"=>$var]);

        //Process Battery Cell Voltage 42 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+13),2))/50;}
        $request->merge(["bcv42"=>$var]);

        //Process Battery Cell Voltage 43 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+16),2))/50;}
        $request->merge(["bcv43"=>$var]);

        //Process Battery Cell Voltage 44 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+19),2))/50;}
        $request->merge(["bcv44"=>$var]);

        //Process Battery Cell Voltage 45 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+22),2))/50;}
        $request->merge(["bcv45"=>$var]);

        //Process Battery Cell Voltage 46 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+25),2))/50;}
        $request->merge(["bcv46"=>$var]);

        //Process Battery Cell Voltage 47 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+7),2))/50;}
        $request->merge(["bcv47"=>$var]);

        //Process Battery Cell Voltage 48 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+10),2))/50;}
        $request->merge(["bcv48"=>$var]);

        //Process Battery Cell Voltage 49 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+13),2))/50;}
        $request->merge(["bcv49"=>$var]);

        //Process Battery Cell Voltage 50 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+16),2))/50;}
        $request->merge(["bcv50"=>$var]);

        //Process Battery Cell Voltage 51 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+19),2))/50;}
        $request->merge(["bcv51"=>$var]);

        //Process Battery Cell Voltage 52 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+22),2))/50;}
        $request->merge(["bcv52"=>$var]);

        //Process Battery Cell Voltage 53 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+25),2))/50;}
        $request->merge(["bcv53"=>$var]);

        //Process Battery Cell Voltage 54 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 24")+7),2))/50;}
        $request->merge(["bcv54"=>$var]);

        //Process Battery Cell Voltage 55 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 24")+10),2))/50;}
        $request->merge(["bcv55"=>$var]);

        //Process Battery Cell Voltage 56 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 24")+13),2))/50;}
        $request->merge(["bcv56"=>$var]);

        //Process Battery Cell Voltage 57 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 24")+16),2))/50;}
        $request->merge(["bcv57"=>$var]);

        //Process Battery Cell Voltage 58 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 24")+19),2))/50;}
        $request->merge(["bcv58"=>$var]);

        //Process Battery Cell Voltage 59 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 24")+22),2))/50;}
        $request->merge(["bcv59"=>$var]);

        //Process Battery Cell Voltage 60 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 24")+25),2))/50;}
        $request->merge(["bcv60"=>$var]);

        //Process Battery Cell Voltage 61 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 25") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 25")+7),2))/50;}
        $request->merge(["bcv61"=>$var]);

        //Process Battery Cell Voltage 62 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 25") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 25")+10),2))/50;}
        $request->merge(["bcv62"=>$var]);

        //Process Battery Cell Voltage 63 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 25") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 25")+13),2))/50;}
        $request->merge(["bcv63"=>$var]);

        //Process Battery Cell Voltage 64 Data
        $var= $dx_2103;
        if(strpos($var,"7EC 25") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 25")+16),2))/50;}
        $request->merge(["bcv64"=>$var]);

        //Process Battery Cell Voltage 65 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 21") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 21")+7),2))/50;}
        $request->merge(["bcv65"=>$var]);

        //Process Battery Cell Voltage 66 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 21") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 21")+10),2))/50;}
        $request->merge(["bcv66"=>$var]);

        //Process Battery Cell Voltage 67 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 21") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 21")+13),2))/50;}
        $request->merge(["bcv67"=>$var]);

        //Process Battery Cell Voltage 68 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 21") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 21")+16),2))/50;}
        $request->merge(["bcv68"=>$var]);

        //Process Battery Cell Voltage 69 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 21") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 21")+19),2))/50;}
        $request->merge(["bcv69"=>$var]);

        //Process Battery Cell Voltage 70 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 21") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 21")+22),2))/50;}
        $request->merge(["bcv70"=>$var]);

        //Process Battery Cell Voltage 71 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 21") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 21")+25),2))/50;}
        $request->merge(["bcv71"=>$var]);

        //Process Battery Cell Voltage 72 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+7),2))/50;}
        $request->merge(["bcv72"=>$var]);

        //Process Battery Cell Voltage 73 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+10),2))/50;}
        $request->merge(["bcv73"=>$var]);

        //Process Battery Cell Voltage 74 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+13),2))/50;}
        $request->merge(["bcv74"=>$var]);

        //Process Battery Cell Voltage 75 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+16),2))/50;}
        $request->merge(["bcv75"=>$var]);

        //Process Battery Cell Voltage 76 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+19),2))/50;}
        $request->merge(["bcv76"=>$var]);

        //Process Battery Cell Voltage 77 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+22),2))/50;}
        $request->merge(["bcv77"=>$var]);

        //Process Battery Cell Voltage 78 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 22") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 22")+25),2))/50;}
        $request->merge(["bcv78"=>$var]);

        //Process Battery Cell Voltage 79 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+7),2))/50;}
        $request->merge(["bcv79"=>$var]);

        //Process Battery Cell Voltage 80 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+10),2))/50;}
        $request->merge(["bcv80"=>$var]);

        //Process Battery Cell Voltage 81 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+13),2))/50;}
        $request->merge(["bcv81"=>$var]);

        //Process Battery Cell Voltage 82 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+16),2))/50;}
        $request->merge(["bcv82"=>$var]);

        //Process Battery Cell Voltage 83 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+19),2))/50;}
        $request->merge(["bcv83"=>$var]);

        //Process Battery Cell Voltage 84 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+22),2))/50;}
        $request->merge(["bcv84"=>$var]);

        //Process Battery Cell Voltage 85 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 23") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 23")+25),2))/50;}
        $request->merge(["bcv85"=>$var]);

        //Process Battery Cell Voltage 86 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 24")+7),2))/50;}
        $request->merge(["bcv86"=>$var]);

        //Process Battery Cell Voltage 87 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 24")+10),2))/50;}
        $request->merge(["bcv87"=>$var]);

        //Process Battery Cell Voltage 88 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 24")+13),2))/50;}
        $request->merge(["bcv88"=>$var]);

        //Process Battery Cell Voltage 89 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 24")+16),2))/50;}
        $request->merge(["bcv89"=>$var]);

        //Process Battery Cell Voltage 90 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 24")+19),2))/50;}
        $request->merge(["bcv90"=>$var]);

        //Process Battery Cell Voltage 91 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 24")+22),2))/50;}
        $request->merge(["bcv91"=>$var]);

        //Process Battery Cell Voltage 92 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 24") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 24")+25),2))/50;}
        $request->merge(["bcv92"=>$var]);

        //Process Battery Cell Voltage 93 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 25") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 25")+7),2))/50;}
        $request->merge(["bcv93"=>$var]);

        //Process Battery Cell Voltage 94 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 25") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 25")+10),2))/50;}
        $request->merge(["bcv94"=>$var]);

        //Process Battery Cell Voltage 95 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 25") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 25")+13),2))/50;}
        $request->merge(["bcv95"=>$var]);

        //Process Battery Cell Voltage 96 Data
        $var= $dx_2104;
        if(strpos($var,"7EC 25") === FALSE){$var= "N/A";}
        else{$var= hexdec(substr($var,(strpos($var,"7EC 25")+16),2))/50;}
        $request->merge(["bcv96"=>$var]);

        //Determine if Data was Logged while PI Zero was Online/Offline
        $var= $dx_2101;
        if (substr($var, 0,1) === "["){$var= "0";}  // Assign Value of 0 for Offline
        else{$var= "1";}                            // Assign Value of 1 for Online
        $request->merge(["pi0_status"=>$var]);

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
            'battery_current' => 'required',
            'battery_voltage' => 'required',
            'BatTmpMX' => 'required',
            'BatTmpMI' => 'required',
            'bmt1' => 'required',
            'bmt2' => 'required',
            'bmt3' => 'required',
            'bmt4' => 'required',
            'bmt5' => 'required',
            'BatTmpIN' => 'required',
            'MXCV' => 'required',
            'MICV' => 'required',
            'MXCVno' => 'required',
            'MICVno' => 'required',
            'fan_status' => 'required',
            'fan_fbsignal' => 'required',
            'obdabv' => 'required',
            'ccc' => 'required',
            'cdc' => 'required',
            'ccp' => 'required',
            'cdp' => 'required',
            'cot' => 'required',
            'icv' => 'required',
            'ir' => 'required',
            'BatTmpMX2' => 'required',
            'BatTmpMI2' => 'required',
            'bmt6' => 'required',
            'bmt7' => 'required',
            'bmt8' => 'required',
            'bmt9' => 'required',
            'bmt10' => 'required',
            'acp2' => 'required',
            'adp2' => 'required',
            'bcvd' => 'required',
            'qcns' => 'required',
            'abwd' => 'required',
            'bht1' => 'required',
            'bht2' => 'required',
            'soh' => 'required',
            'mdc' => 'required',
            'md' => 'required',
            'midc' => 'required',
            'bcv1' => 'required',
            'bcv2' => 'required',
            'bcv3' => 'required',
            'bcv4' => 'required',
            'bcv5' => 'required',
            'bcv6' => 'required',
            'bcv7' => 'required',
            'bcv8' => 'required',
            'bcv9' => 'required',
            'bcv10' => 'required',
            'bcv11' => 'required',
            'bcv12' => 'required',
            'bcv13' => 'required',
            'bcv14' => 'required',
            'bcv15' => 'required',
            'bcv16' => 'required',
            'bcv17' => 'required',
            'bcv18' => 'required',
            'bcv19' => 'required',
            'bcv20' => 'required',
            'bcv21' => 'required',
            'bcv22' => 'required',
            'bcv23' => 'required',
            'bcv24' => 'required',
            'bcv25' => 'required',
            'bcv26' => 'required',
            'bcv27' => 'required',
            'bcv28' => 'required',
            'bcv29' => 'required',
            'bcv30' => 'required',
            'bcv31' => 'required',
            'bcv32' => 'required',
            'bcv33' => 'required',
            'bcv34' => 'required',
            'bcv35' => 'required',
            'bcv36' => 'required',
            'bcv37' => 'required',
            'bcv38' => 'required',
            'bcv39' => 'required',
            'bcv40' => 'required',
            'bcv41' => 'required',
            'bcv42' => 'required',
            'bcv43' => 'required',
            'bcv44' => 'required',
            'bcv45' => 'required',
            'bcv46' => 'required',
            'bcv47' => 'required',
            'bcv48' => 'required',
            'bcv49' => 'required',
            'bcv50' => 'required',
            'bcv51' => 'required',
            'bcv52' => 'required',
            'bcv53' => 'required',
            'bcv54' => 'required',
            'bcv55' => 'required',
            'bcv56' => 'required',
            'bcv57' => 'required',
            'bcv58' => 'required',
            'bcv59' => 'required',
            'bcv60' => 'required',
            'bcv61' => 'required',
            'bcv62' => 'required',
            'bcv63' => 'required',
            'bcv64' => 'required',
            'bcv65' => 'required',
            'bcv66' => 'required',
            'bcv67' => 'required',
            'bcv68' => 'required',
            'bcv69' => 'required',
            'bcv70' => 'required',
            'bcv71' => 'required',
            'bcv72' => 'required',
            'bcv73' => 'required',
            'bcv74' => 'required',
            'bcv75' => 'required',
            'bcv76' => 'required',
            'bcv77' => 'required',
            'bcv78' => 'required',
            'bcv79' => 'required',
            'bcv80' => 'required',
            'bcv81' => 'required',
            'bcv82' => 'required',
            'bcv83' => 'required',
            'bcv84' => 'required',
            'bcv85' => 'required',
            'bcv86' => 'required',
            'bcv87' => 'required',
            'bcv88' => 'required',
            'bcv89' => 'required',
            'bcv90' => 'required',
            'bcv91' => 'required',
            'bcv92' => 'required',
            'bcv93' => 'required',
            'bcv94' => 'required',
            'bcv95' => 'required',
            'bcv96' => 'required',
            'pi0_status' => 'required',

        ]);
        
        $reading = new Reading2;
        $reading->fill($data);
        $reading->save();
        return $reading;
    }
}
