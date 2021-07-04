@extends('layouts.app', ['class' => 'bg-default'])
<meta http-equiv="refresh" content="10">
@section('content')
<div class="header bg-gradient-primary py-7 py-lg-8">
    <div class="container">
        <div class="header-body text-center mt-4 mb-7">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-5 col-md-6">
                    <h2 class="text-white">{{ __('Hyundai Ioniq EV') }}</h2>
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-lg-5 col-md-6">
                    <h1 class="text-white">{{ __('Live Data') }}</h1>
                </div>
            </div>
            @foreach($readings as $reading)
                @if($reading->pi0_status === "1")
                    <div class="alert alert-success" role="alert">
                        <strong>Online</strong>
                    </div>
                @elseif($reading->pi0_status === "0")
                    <div class="alert alert-danger" role="alert">
                        <strong>Offline</strong>
                    </div>
                @endif
            <div class="row justify-content-center">
                <div id="accordion" class="w-100">
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
                        <div id="collapse{{$reading->id}}" class="collapse show" aria-labelledby="heading{{$reading->id}}"
                            data-parent="#accordion">
                            <div class="card-body">
                                <div class="container">
                                      <div class="row">
                                        <div class="col-sm">
                                          <p><strong>SOC (Dashboard)</strong></p>
                                          <p>{{$reading->soc}} %</p>
                                          <p><strong>SOC(BMS)</strong></p>
                                          <p>{{$reading->soc_bms}} %</p>
                                          <p><strong>SOH (Max Deterioration)</strong></p>
                                          <p>{{$reading->soh}} %</p>
                                          <p><strong>Battery Pack Voltage</strong></p>
                                          <p>{{$reading->battery_voltage}} V</p>
                                          <p><strong>Cumulative Charge Current </strong></p>
                                          <p>{{$reading->ccc}} Ah</p>
                                          <p><strong>Cumulative Discharge Current </strong></p>
                                          <p>{{$reading->cdc}} Ah</p>
                                          <p><strong>Cumulative Charge Power </strong></p>
                                          <p>{{$reading->ccp}} kWh</p>
                                        </div>
                                        <div class="col-sm">
                                          <p><strong>RPM</strong></p>
                                          <p>{{$reading->rpm}}</p>
                                          <p><strong>Cumulative Operating Time </strong></p>
                                          <p>{{$reading->cot}} Days</p>
                                          <p><strong>Inverter Capacitor Voltage </strong></p>
                                          <p>{{$reading->icv}} V</p>
                                          <p><strong>Battery Current</strong></p>
                                          <p>{{$reading->battery_current}} A</p>
                                          <p><strong>Maximum Cell Voltage</strong></p>
                                          <p>{{$reading->MXCV}} V</p>
                                          <p><strong>Minimum Cell Voltage</strong></p>
                                          <p>{{$reading->MICV}} V</p>
                                          <p><strong>Cumulative Discharge Power </strong></p>
                                          <p>{{$reading->cdp}} kWh</p>
                                        </div>
                                        <div class="col-sm">
                                          <p><strong>PI Zero Status | Online=1 Offline=0</strong></p>
                                          <p>{{$reading->pi0_status}}</p>
                                          <p><strong>Auxilary Battery Voltage</strong></p>
                                          <p>{{$reading->bat_voltage}} V</p>
                                          <p><strong>Battery Max Temperature</strong></p>
                                          <p>{{$reading->BatTmpMX}} &degC</p>
                                          <p><strong>Battery Min Temperature</strong></p>
                                          <p>{{$reading->BatTmpMI}} &degC</p>
                                          <p><strong>Maximum Cell Voltage No.</strong></p>
                                          <p>{{$reading->MXCVno}} </p>
                                          <p><strong>Minimum Cell Voltage No.</strong></p>
                                          <p>{{$reading->MICVno}} </p>
                                          <p><strong>Auxilliary Battery Voltage (OBDII) </strong></p>
                                          <p>{{$reading->obdabv}} V</p>
                                        </div>
                                      </div>
                                    </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                               @endforeach  
                              </div>
                                 
                        </div>
                    </div>
                    
                </div>
            
            </div>
        </div>
    </div>
</div>


@endsection
