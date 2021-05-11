<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Reading extends Model
{
    use HasFactory;


    protected $fillable = array('time', 'bat_voltage', 'cmd_2101', 'cmd_2102', 'cmd_2103', 'cmd_2104', 'cmd_2105','soc','rpm', 'soc_bms','acp','adp');

}
