<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Reading;

class DashboardController extends Controller
{

    public function index()
    {
        $data = [];
        $data_2 = [];
        $data_3 = [];
        $data_4 = [];
        $data_5 = [];
        $data_6 = [];
        return view('graph.dashboard')->with('id',json_encode($data))->with('id_2',json_encode($data_2))->with('id_3',json_encode($data_3))->with('id_4',json_encode($data_4))->with('id_5',json_encode($data_5))->with('id_6',json_encode($data_6));
    }

    public function dashplot(Request $request){

        //Select EV ID
        $ev_id = $request->ev_id;
        $limit= $request->limit;

        //Database Query - SOC
        $id = Reading::orderBy('time','asc')->select('time','soc')
                                   ->where('ev_id', '=',$ev_id)
                                   ->whereNotIn('soc',['N/A'])
                                   ->limit($limit)
                                   ->get();


        //Formatt Data into appropriate format
        $data[] = ['time','soc'];
        foreach($id as $key=>$value){
            $data[++$key] = [date('Y-M-d h:i:s',strtotime($value->time)), floatval($value->soc)];
        }
        //---------------------------------------------------------------------------------------

        //Database Query - SOC (BMS)
        $id_2 = Reading::orderBy('time','asc')->select('time','soc_bms')
                                   ->where('ev_id', '=',$ev_id)
                                   ->whereNotIn('soc_bms',['N/A'])
                                   ->limit($limit)
                                   ->get();


        //Formatt Data into appropriate format
        $data_2[] = ['time','soc_bms'];
        foreach($id_2 as $key_2=>$value){
            $data_2[++$key_2] = [date('Y-M-d h:i:s',strtotime($value->time)), floatval($value->soc_bms)];
        }
        //---------------------------------------------------------------------------------------

        //Database Query - RPM
        $id_3 = Reading::orderBy('time','asc')->select('time','rpm')
                                   ->where('ev_id', '=',$ev_id)
                                   ->where('rpm', '<', '65336')
                                   ->whereNotIn('rpm',['N/A'])
                                   ->limit($limit)
                                   ->get();


        //Formatt Data into appropriate format
        $data_3[] = ['time','rpm'];
        foreach($id_3 as $key_3=>$value){
            $data_3[++$key_3] = [date('Y-M-d h:i:s',strtotime($value->time)), floatval($value->rpm)];
        }
        //---------------------------------------------------------------------------------------

        //Database Query - Battery Voltage
        $id_4 = Reading::orderBy('time','asc')->select('time','battery_voltage')
                                   ->where('ev_id', '=',$ev_id)
                                   ->whereNotIn('battery_voltage',['N/A'])
                                   ->limit($limit)
                                   ->get();


        //Formatt Data into appropriate format
        $data_4[] = ['time','battery_voltage'];
        foreach($id_4 as $key_4=>$value){
            $data_4[++$key_4] = [date('Y-M-d h:i:s',strtotime($value->time)), floatval($value->battery_voltage)];
        }
        //---------------------------------------------------------------------------------------

        //Database Query - Battery Current
        $id_5 = Reading::orderBy('time','asc')->select('time','battery_current')
                                   ->where('ev_id', '=',$ev_id)
                                   ->whereNotIn('battery_current',['N/A'])
                                   ->limit($limit)
                                   ->get();


        //Formatt Data into appropriate format
        $data_5[] = ['time','battery_current'];
        foreach($id_5 as $key_5=>$value){
            $data_5[++$key_5] = [date('Y-M-d h:i:s',strtotime($value->time)), floatval($value->battery_current)];
        }
        //---------------------------------------------------------------------------------------

        //Database Query - State of Health
        $id_6 = Reading::orderBy('time','asc')->select('time','soh')
                                   ->where('ev_id', '=',$ev_id)
                                   ->whereNotIn('soh',['N/A'])
                                   ->limit($limit)
                                   ->get();


        //Formatt Data into appropriate format
        $data_6[] = ['time','soh'];
        foreach($id_6 as $key_6=>$value){
            $data_6[++$key_6] = [date('Y-M-d h:i:s',strtotime($value->time)), floatval($value->soh)];
        }
        //---------------------------------------------------------------------------------------

        return view('graph.dashboard')->with('id',json_encode($data))->with('id_2',json_encode($data_2))->with('id_3',json_encode($data_3))->with('id_4',json_encode($data_4))->with('id_5',json_encode($data_5))->with('id_6',json_encode($data_6));

    }
}
