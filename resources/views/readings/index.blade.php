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