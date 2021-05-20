<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Reading extends Model
{
    use HasFactory;


    protected $fillable = array('time', 'bat_voltage', 'cmd_2101', 'cmd_2102', 'cmd_2103', 'cmd_2104', 'cmd_2105','soc','rpm', 'soc_bms','acp','adp','battery_current','battery_voltage','BatTmpMX','BatTmpMI','bmt1','bmt2','bmt3','bmt4','bmt5','BatTmpIN','MXCV','MICV','MXCVno','MICVno','fan_status','fan_fbsignal','obdabv','ccc','cdc','ccp','cdp','cot','icv','ir','BatTmpMX2','BatTmpMI2','bmt6','bmt7','bmt8','bmt9','bmt10','acp2','adp2','bcvd','qcns','abwd','bht1','bht2','soh', 'mdc', 'md', 'midc', 'bcv1','bcv2', 'bcv3', 'bcv4', 'bcv5', 'bcv6', 'bcv7', 'bcv8', 'bcv9', 'bcv10', 'bcv11', 'bcv12', 'bcv13', 'bcv14', 'bcv15', 'bcv16');

}
