@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
<div class="header bg-gradient-primary py-7 py-lg-8">
    <div class="container">
        <div class="header-body text-center mt-4 mb-7">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-5 col-md-6">
                    <h1 class="text-white">{{ __('Hyundai Ioniq EV Data') }}</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div id="accordion" class="w-100">
                    @foreach($readings as $reading)
                    <div class="card mb-1">
                        <div class="card-header pt-0 pb-0" id="heading{{$reading->id}}">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse"
                                    data-target="#collapse{{$reading->id}}" aria-expanded="true"
                                    aria-controls="collapse{{$reading->id}}">
                                    ID: {{$reading->id}} | Time: {{$reading->time}} | SOC: {{$reading->soc}} %
                                </button>
                            </h5>
                        </div>
                        <div id="collapse{{$reading->id}}" class="collapse" aria-labelledby="heading{{$reading->id}}"
                            data-parent="#accordion">
                            <div class="card-body">
                                <p><strong>CMD_2101</strong></p>
                                <p>{{$reading->cmd_2101}}</p>
                                <p><strong>CMD_2102</strong></p>
                                <p>{{$reading->cmd_2102}}</p>
                                <p><strong>CMD_2103</strong></p>
                                <p>{{$reading->cmd_2103}}</p>
                                <p><strong>CMD_2104</strong></p>
                                <p>{{$reading->cmd_2104}}</p>
                                <p><strong>CMD_2105</strong></p>
                                <p>{{$reading->cmd_2105}}</p>
                                <p><strong>Auxilary Battery Voltage</strong></p>
                                <p>{{$reading->bat_voltage}} V</p>
                                <p><strong>SOC (Dashboard)</strong></p>
                                <p>{{$reading->soc}} %</p>
                                <p><strong>SOC(BMS)</strong></p>
                                <p>{{$reading->soc_bms}} %</p>
                                <p><strong>RPM</strong></p>
                                <p>{{$reading->rpm}}</p>
                                <p><strong>Available Charge Power</strong></p>
                                <p>{{$reading->acp}} kW</p>
                                <p><strong>Available Discharge Power</strong></p>
                                <p>{{$reading->adp}} kW</p>
                                <p><strong>Battery Current</strong></p>
                                <p>{{$reading->battery_current}} A</p>
                                <p><strong>Battery Pack Voltage</strong></p>
                                <p>{{$reading->battery_voltage}} V</p>
                                <p><strong>Battery Max Temperature</strong></p>
                                <p>{{$reading->BatTmpMX}} &degC</p>
                                <p><strong>Battery Min Temperature</strong></p>
                                <p>{{$reading->BatTmpMI}} &degC</p>
                                <p><strong>Battery Module 1 Temperature</strong></p>
                                <p>{{$reading->bmt1}} &degC</p>
                                <p><strong>Battery Module 2 Temperature</strong></p>
                                <p>{{$reading->bmt2}} &degC</p>
                                <p><strong>Battery Module 3 Temperature</strong></p>
                                <p>{{$reading->bmt3}} &degC</p>
                                <p><strong>Battery Module 4 Temperature</strong></p>
                                <p>{{$reading->bmt4}} &degC</p>
                                <p><strong>Battery Module 5 Temperature</strong></p>
                                <p>{{$reading->bmt5}} &degC</p>
                                <p><strong>Battery Inlet Temperature</strong></p>
                                <p>{{$reading->BatTmpIN}} &degC</p>
                                <p><strong>Maximum Cell Voltage</strong></p>
                                <p>{{$reading->MXCV}} V</p>
                                <p><strong>Minimum Cell Voltage</strong></p>
                                <p>{{$reading->MICV}} V</p>
                                <p><strong>Maximum Cell Voltage No.</strong></p>
                                <p>{{$reading->MXCVno}} </p>
                                <p><strong>Minimum Cell Voltage No.</strong></p>
                                <p>{{$reading->MICVno}} </p>
                                <p><strong>Fan Status | On=1 Off=0 </strong></p>
                                <p>{{$reading->fan_status}} </p>
                                <p><strong>Fan Feedback Signal | On=1 Off=0 </strong></p>
                                <p>{{$reading->fan_fbsignal}} </p>
                                <p><strong>Auxilliary Battery Voltage (OBDII) </strong></p>
                                <p>{{$reading->obdabv}} V</p>
                                <p><strong>Cumulative Charge Current </strong></p>
                                <p>{{$reading->ccc}} Ah</p>
                                <p><strong>Cumulative Discharge Current </strong></p>
                                <p>{{$reading->cdc}} Ah</p>
                                <p><strong>Cumulative Charge Power </strong></p>
                                <p>{{$reading->ccp}} kWh</p>
                                <p><strong>Cumulative Discharge Power </strong></p>
                                <p>{{$reading->cdp}} kWh</p>
                                <p><strong>Cumulative Operating Time </strong></p>
                                <p>{{$reading->cot}} Days</p>
                                <p><strong>Inverter Capacitor Voltage </strong></p>
                                <p>{{$reading->icv}} V</p>
                                <p><strong>Isolation Resistance </strong></p>
                                <p>{{$reading->ir}} k&#8486</p>
                                <p><strong>Battery Max Temperature 2</strong></p>
                                <p>{{$reading->BatTmpMX2}} &degC</p>
                                <p><strong>Battery Min Temperature 2</strong></p>
                                <p>{{$reading->BatTmpMI2}} &degC</p>
                                <p><strong>Battery Module 6 Temperature</strong></p>
                                <p>{{$reading->bmt6}} &degC</p>
                                <p><strong>Battery Module 7 Temperature</strong></p>
                                <p>{{$reading->bmt7}} &degC</p>
                                <p><strong>Battery Module 8 Temperature</strong></p>
                                <p>{{$reading->bmt8}} &degC</p>
                                <p><strong>Battery Module 9 Temperature</strong></p>
                                <p>{{$reading->bmt9}} &degC</p>
                                <p><strong>Battery Module 10 Temperature</strong></p>
                                <p>{{$reading->bmt10}} &degC</p>
                                <p><strong>Available Charge Power 2</strong></p>
                                <p>{{$reading->acp2}} kW</p>
                                <p><strong>Available Discharge Power 2</strong></p>
                                <p>{{$reading->adp2}} kW</p>
                                <p><strong>Battery Cell Voltage Deviation</strong></p>
                                <p>{{$reading->bcvd}} V</p>
                                <p><strong>Quick Charge Normal Status</strong></p>
                                <p>{{$reading->qcns}}</p>
                                <p><strong>Battery Module 10 Temperature</strong></p>
                                <p>{{$reading->bmt10}} &degC</p>
                                <p><strong>Airbag H/wire Duty</strong></p>
                                <p>{{$reading->abwd}} %</p>
                                <p><strong>Battery Heater Temperature 1</strong></p>
                                <p>{{$reading->bht1}} &degC</p>
                                <p><strong>Battery Heater Temperature 2</strong></p>
                                <p>{{$reading->bht2}} &degC</p>
                                <p><strong>SOH (Max Deterioration)</strong></p>
                                <p>{{$reading->soh}} %</p>
                                <p><strong>Max Deterioration Cell no.</strong></p>
                                <p>{{$reading->mdc}}</p>
                                <p><strong>Min Deterioration</strong></p>
                                <p>{{$reading->md}} %</p>
                                <p><strong>Min Deterioration Cell no.</strong></p>
                                <p>{{$reading->midc}}</p>
                                <p><strong>Cell Voltage 1</strong></p>
                                <p>{{$reading->bcv1}} V</p>
                                <p><strong>Cell Voltage 2</strong></p>
                                <p>{{$reading->bcv2}} V</p>
                                <p><strong>Cell Voltage 3</strong></p>
                                <p>{{$reading->bcv3}} V</p>
                                <p><strong>Cell Voltage 4</strong></p>
                                <p>{{$reading->bcv4}} V</p>
                                <p><strong>Cell Voltage 5</strong></p>
                                <p>{{$reading->bcv5}} V</p>
                                <p><strong>Cell Voltage 6</strong></p>
                                <p>{{$reading->bcv6}} V</p>
                                <p><strong>Cell Voltage 7</strong></p>
                                <p>{{$reading->bcv7}} V</p>
                                <p><strong>Cell Voltage 8</strong></p>
                                <p>{{$reading->bcv8}} V</p>
                                <p><strong>Cell Voltage 9</strong></p>
                                <p>{{$reading->bcv9}} V</p>
                                <p><strong>Cell Voltage 10</strong></p>
                                <p>{{$reading->bcv10}} V</p>
                                <p><strong>Cell Voltage 11</strong></p>
                                <p>{{$reading->bcv11}} V</p>
                                <p><strong>Cell Voltage 12</strong></p>
                                <p>{{$reading->bcv12}} V</p>
                                <p><strong>Cell Voltage 13</strong></p>
                                <p>{{$reading->bcv13}} V</p>
                                <p><strong>Cell Voltage 14</strong></p>
                                <p>{{$reading->bcv14}} V</p>
                                <p><strong>Cell Voltage 15</strong></p>
                                <p>{{$reading->bcv15}} V</p>
                                <p><strong>Cell Voltage 16</strong></p>
                                <p>{{$reading->bcv16}} V</p>
                                

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <div class="col-6 mt-5">
                    {{$readings->links()}}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection