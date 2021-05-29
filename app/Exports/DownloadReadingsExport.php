<?php

namespace App\Exports;

use App\Models\Reading;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DownloadReadingsExport implements FromCollection,WithHeadings
{
	public function headings():array{
		return['id','time', 'bat_voltage', 'cmd_2101', 'cmd_2102', 'cmd_2103', 'cmd_2104', 'cmd_2105','soc','rpm', 'soc_bms','acp','adp','battery_current','battery_voltage','BatTmpMX','BatTmpMI','bmt1','bmt2','bmt3','bmt4','bmt5','BatTmpIN','MXCV','MICV','MXCVno','MICVno','fan_status','fan_fbsignal','obdabv','ccc','cdc','ccp','cdp','cot','icv','ir','BatTmpMX2','BatTmpMI2','bmt6','bmt7','bmt8','bmt9','bmt10','acp2','adp2','bcvd','qcns','abwd','bht1','bht2','soh', 'mdc', 'md', 'midc', 'bcv1','bcv2', 'bcv3', 'bcv4', 'bcv5', 'bcv6', 'bcv7', 'bcv8', 'bcv9', 'bcv10', 'bcv11', 'bcv12', 'bcv13', 'bcv14', 'bcv15', 'bcv16','bcv17','bcv18', 'bcv19', 'bcv20', 'bcv21','bcv22', 'bcv23', 'bcv24', 'bcv25', 'bcv26', 'bcv27', 'bcv28', 'bcv29', 'bcv30', 'bcv31', 'bcv32', 'bcv33', 'bcv34', 'bcv35', 'bcv36', 'bcv37', 'bcv38', 'bcv39', 'bcv40', 'bcv41', 'bcv42', 'bcv43', 'bcv44', 'bcv45', 'bcv46', 'bcv47', 'bcv48', 'bcv49', 'bcv50', 'bcv51', 'bcv52', 'bcv53', 'bcv54', 'bcv55', 'bcv56', 'bcv57', 'bcv58', 'bcv59', 'bcv60', 'bcv61', 'bcv62', 'bcv63', 'bcv64', 'bcv65', 'bcv66', 'bcv67', 'bcv68', 'bcv69', 'bcv70', 'bcv71', 'bcv72', 'bcv73', 'bcv74', 'bcv75', 'bcv76', 'bcv77', 'bcv78', 'bcv79', 'bcv80', 'bcv81', 'bcv82', 'bcv83', 'bcv84', 'bcv85', 'bcv86', 'bcv87', 'bcv88', 'bcv89', 'bcv90', 'bcv91', 'bcv92', 'bcv93', 'bcv94', 'bcv95', 'bcv96', 'pi0_status'];
		
	}
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return DownloadReadingsExport::all();
        return collect (Reading::getReadings());
    }
}
