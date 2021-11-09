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
                                    ID: {{$reading->id}} |EV: {{$reading->ev_id}}| Time: {{$reading->time}} | SOC: {{$reading->soc}} %
                                </button>
                            </h5>
                        </div>
                        <div id="collapse{{$reading->id}}" class="collapse" aria-labelledby="heading{{$reading->id}}"
                            data-parent="#accordion">
                            <div class="card-body">
                                <p><strong>PI Zero Status | Online=1 Offline=0</strong></p>
                                <p>{{$reading->pi0_status}}</p>
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
                                <p><strong>Cell Voltage 17</strong></p>
                                <p>{{$reading->bcv17}} V</p>
                                <p><strong>Cell Voltage 18</strong></p>
                                <p>{{$reading->bcv18}} V</p>
                                <p><strong>Cell Voltage 19</strong></p>
                                <p>{{$reading->bcv19}} V</p>
                                <p><strong>Cell Voltage 20</strong></p>
                                <p>{{$reading->bcv20}} V</p>
                                <p><strong>Cell Voltage 21</strong></p>
                                <p>{{$reading->bcv21}} V</p>
                                <p><strong>Cell Voltage 22</strong></p>
                                <p>{{$reading->bcv22}} V</p>
                                <p><strong>Cell Voltage 23</strong></p>
                                <p>{{$reading->bcv23}} V</p>
                                <p><strong>Cell Voltage 24</strong></p>
                                <p>{{$reading->bcv24}} V</p>
                                <p><strong>Cell Voltage 25</strong></p>
                                <p>{{$reading->bcv25}} V</p>
                                <p><strong>Cell Voltage 26</strong></p>
                                <p>{{$reading->bcv26}} V</p>
                                <p><strong>Cell Voltage 27</strong></p>
                                <p>{{$reading->bcv27}} V</p>
                                <p><strong>Cell Voltage 28</strong></p>
                                <p>{{$reading->bcv28}} V</p>
                                <p><strong>Cell Voltage 29</strong></p>
                                <p>{{$reading->bcv29}} V</p>
                                <p><strong>Cell Voltage 30</strong></p>
                                <p>{{$reading->bcv30}} V</p>
                                <p><strong>Cell Voltage 31</strong></p>
                                <p>{{$reading->bcv31}} V</p>
                                <p><strong>Cell Voltage 32</strong></p>
                                <p>{{$reading->bcv32}} V</p>
                                <p><strong>Cell Voltage 33</strong></p>
                                <p>{{$reading->bcv33}} V</p>
                                <p><strong>Cell Voltage 34</strong></p>
                                <p>{{$reading->bcv34}} V</p>
                                <p><strong>Cell Voltage 35</strong></p>
                                <p>{{$reading->bcv35}} V</p>
                                <p><strong>Cell Voltage 36</strong></p>
                                <p>{{$reading->bcv36}} V</p>
                                <p><strong>Cell Voltage 37</strong></p>
                                <p>{{$reading->bcv37}} V</p>
                                <p><strong>Cell Voltage 38</strong></p>
                                <p>{{$reading->bcv38}} V</p>
                                <p><strong>Cell Voltage 39</strong></p>
                                <p>{{$reading->bcv39}} V</p>
                                <p><strong>Cell Voltage 40</strong></p>
                                <p>{{$reading->bcv40}} V</p>
                                <p><strong>Cell Voltage 41</strong></p>
                                <p>{{$reading->bcv41}} V</p>
                                <p><strong>Cell Voltage 42</strong></p>
                                <p>{{$reading->bcv42}} V</p>
                                <p><strong>Cell Voltage 43</strong></p>
                                <p>{{$reading->bcv43}} V</p>
                                <p><strong>Cell Voltage 44</strong></p>
                                <p>{{$reading->bcv44}} V</p>
                                <p><strong>Cell Voltage 45</strong></p>
                                <p>{{$reading->bcv45}} V</p>
                                <p><strong>Cell Voltage 46</strong></p>
                                <p>{{$reading->bcv46}} V</p>
                                <p><strong>Cell Voltage 47</strong></p>
                                <p>{{$reading->bcv47}} V</p>
                                <p><strong>Cell Voltage 48</strong></p>
                                <p>{{$reading->bcv48}} V</p>
                                <p><strong>Cell Voltage 49</strong></p>
                                <p>{{$reading->bcv49}} V</p>
                                <p><strong>Cell Voltage 50</strong></p>
                                <p>{{$reading->bcv50}} V</p>
                                <p><strong>Cell Voltage 51</strong></p>
                                <p>{{$reading->bcv51}} V</p>
                                <p><strong>Cell Voltage 52</strong></p>
                                <p>{{$reading->bcv52}} V</p>
                                <p><strong>Cell Voltage 53</strong></p>
                                <p>{{$reading->bcv53}} V</p>
                                <p><strong>Cell Voltage 54</strong></p>
                                <p>{{$reading->bcv54}} V</p>
                                <p><strong>Cell Voltage 55</strong></p>
                                <p>{{$reading->bcv55}} V</p>
                                <p><strong>Cell Voltage 56</strong></p>
                                <p>{{$reading->bcv56}} V</p>
                                <p><strong>Cell Voltage 57</strong></p>
                                <p>{{$reading->bcv57}} V</p>
                                <p><strong>Cell Voltage 58</strong></p>
                                <p>{{$reading->bcv58}} V</p>
                                <p><strong>Cell Voltage 59</strong></p>
                                <p>{{$reading->bcv59}} V</p>
                                <p><strong>Cell Voltage 60</strong></p>
                                <p>{{$reading->bcv60}} V</p>
                                <p><strong>Cell Voltage 61</strong></p>
                                <p>{{$reading->bcv61}} V</p>
                                <p><strong>Cell Voltage 62</strong></p>
                                <p>{{$reading->bcv62}} V</p>
                                <p><strong>Cell Voltage 63</strong></p>
                                <p>{{$reading->bcv63}} V</p>
                                <p><strong>Cell Voltage 64</strong></p>
                                <p>{{$reading->bcv64}} V</p>
                                <p><strong>Cell Voltage 65</strong></p>
                                <p>{{$reading->bcv65}} V</p>
                                <p><strong>Cell Voltage 66</strong></p>
                                <p>{{$reading->bcv66}} V</p>
                                <p><strong>Cell Voltage 67</strong></p>
                                <p>{{$reading->bcv67}} V</p>
                                <p><strong>Cell Voltage 68</strong></p>
                                <p>{{$reading->bcv68}} V</p>
                                <p><strong>Cell Voltage 69</strong></p>
                                <p>{{$reading->bcv69}} V</p>
                                <p><strong>Cell Voltage 70</strong></p>
                                <p>{{$reading->bcv70}} V</p>
                                <p><strong>Cell Voltage 71</strong></p>
                                <p>{{$reading->bcv71}} V</p>
                                <p><strong>Cell Voltage 72</strong></p>
                                <p>{{$reading->bcv72}} V</p>
                                <p><strong>Cell Voltage 73</strong></p>
                                <p>{{$reading->bcv73}} V</p>
                                <p><strong>Cell Voltage 74</strong></p>
                                <p>{{$reading->bcv74}} V</p>
                                <p><strong>Cell Voltage 75</strong></p>
                                <p>{{$reading->bcv75}} V</p>
                                <p><strong>Cell Voltage 76</strong></p>
                                <p>{{$reading->bcv76}} V</p>
                                <p><strong>Cell Voltage 77</strong></p>
                                <p>{{$reading->bcv77}} V</p>
                                <p><strong>Cell Voltage 78</strong></p>
                                <p>{{$reading->bcv78}} V</p>
                                <p><strong>Cell Voltage 79</strong></p>
                                <p>{{$reading->bcv79}} V</p>
                                <p><strong>Cell Voltage 80</strong></p>
                                <p>{{$reading->bcv80}} V</p>
                                <p><strong>Cell Voltage 81</strong></p>
                                <p>{{$reading->bcv81}} V</p>
                                <p><strong>Cell Voltage 82</strong></p>
                                <p>{{$reading->bcv82}} V</p>
                                <p><strong>Cell Voltage 83</strong></p>
                                <p>{{$reading->bcv83}} V</p>
                                <p><strong>Cell Voltage 84</strong></p>
                                <p>{{$reading->bcv84}} V</p>
                                <p><strong>Cell Voltage 85</strong></p>
                                <p>{{$reading->bcv85}} V</p>
                                <p><strong>Cell Voltage 86</strong></p>
                                <p>{{$reading->bcv86}} V</p>
                                <p><strong>Cell Voltage 87</strong></p>
                                <p>{{$reading->bcv87}} V</p>
                                <p><strong>Cell Voltage 88</strong></p>
                                <p>{{$reading->bcv88}} V</p>
                                <p><strong>Cell Voltage 89</strong></p>
                                <p>{{$reading->bcv89}} V</p>
                                <p><strong>Cell Voltage 90</strong></p>
                                <p>{{$reading->bcv90}} V</p>
                                <p><strong>Cell Voltage 91</strong></p>
                                <p>{{$reading->bcv91}} V</p>
                                <p><strong>Cell Voltage 92</strong></p>
                                <p>{{$reading->bcv92}} V</p>
                                <p><strong>Cell Voltage 93</strong></p>
                                <p>{{$reading->bcv93}} V</p>
                                <p><strong>Cell Voltage 94</strong></p>
                                <p>{{$reading->bcv94}} V</p>
                                <p><strong>Cell Voltage 95</strong></p>
                                <p>{{$reading->bcv95}} V</p>
                                <p><strong>Cell Voltage 96</strong></p>
                                <p>{{$reading->bcv96}} V</p>
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