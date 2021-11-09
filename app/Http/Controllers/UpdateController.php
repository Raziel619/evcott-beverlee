<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reading;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{
    public function update_records(){
        $affected = DB::table('readings')
              ->update(['ev_id' => 1]);



        return "Records Updated";
    }
}
