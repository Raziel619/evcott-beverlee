<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reading;
use Illuminate\Support\Facades\DB;

class test extends Controller
{
    public function index()
    {
        $data = [];
        return view('graph.randomchart')->with('id',json_encode($data));
    }

        public function plot(Request $request)
    {
        //print_r($request->input());
        //dd(gettype($req));
        $ev_id = $request->ev_id;
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $parameter = $request->parameter;
        $limit= $request->limit;
        $exclude = $request->exclude;

        if($exclude == "on")
            {$exclude= "N/A";}

         //Database Query
        $id = DB::table('readings')->select('time',$parameter)
                                   ->where('time','>=',$start_date)
                                   ->where('time','<=',$end_date)
                                   ->where('ev_id', '=',$ev_id)
                                   ->whereNotIn($parameter,[$exclude])
                                   ->limit($limit)
                                   ->get();
        //dd($id);
        //Formatt Data into appropriate format
        $data[] = ['time',$parameter];
        foreach($id as $key=>$value){
            $data[++$key] = [date('Y-M-d h:i:s',strtotime($value->time)), floatval($value->$parameter)];
        }

        return view('graph.randomchart')->with('id',json_encode($data));
        //dd($data);
        //dd($exclude);
        //$temp = array_slice($data, 2);
        //(gettype($data));
        //$req->all();
        //dd($request);
        //return 'Hello World';
    }


    public function data()
    {
        $user = DB::table('reading2s')->where('soc', '>', 0) ->get();
        return $user;
    }

     public function apple()
    {
        //Database Query
        $id = DB::table('readings')->select('time','soc_bms')
                                   ->where('time','>=','2020-10-29 03:20:00')
                                   ->where('time','<=','2020-10-29 04:00:00')
                                   ->whereNotIn('soc_bms',['N/A'])
                                   ->get();

        //Formatt Data into appropriate format
        $data[] = ['time','soc_bms'];
        foreach($id as $key=>$value){
            $data[++$key] = [date('Y-M-d h:i:s',strtotime($value->time)), floatval($value->soc_bms)];
        }


        //dd($data);
        //dd(gettype($data));
        //dd($data2);                         
        //$chart = new Samplechart2;


        //return view('graph.graph',compact('chart'));
        return view('graph.randomchart')->with('id',json_encode($data));

    }

    

}
