<!-- <!DOCTYPE html>
<html>
<body style="background-color:grey;">
<head>
    <title>Laravel Google Chart Implementation Example</title>
</head>

<body class="antialiased">
    <h2>Integrating Line Chart in Laravel</h2>
    <div id="linechart"  style="width: 1500px; height: 500px"></div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        var id = <?php echo $id; ?>;
        console.log(id);
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(lineChart);

        function lineChart() {
            var data = google.visualization.arrayToDataTable(id);
            var options = {
                title: 'State Of Charge versus Time',
                curveType: 'function',
                legend: {
                    position: 'bottom'
                },
                 hAxis: {
                    title: 'Date'
                },
                vAxis: {
                    title: 'SOC %'
                },
            };
            var chart = new google.visualization.LineChart(document.getElementById('linechart'));
            chart.draw(data, options);
        }        
    </script>
</body>

</html> -->

@extends('layouts.app', ['class' => 'bg-default'])
@section('content')
<div class="header bg-gradient-primary py-7 py-lg-8">
    <div class="container">
        <div class="header-body text-center mt-4 mb-7">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-5 col-md-6">
                    <h1 class="text-white">{{ __('EV Data Plotter') }}</h1>
                </div>
            </div>

            <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main ">
                <div class="container">
                <form action="plot" method="POST">
                @csrf

                    <h2>Enter Data Fields</h2>

                    <div class="form-group">
                        <label class="form-control-label"><h4>EV ID</h4></label>
                        <input class="form-control" type="text" name="ev_id" placeholder="1">
                    </div>
                    <div class="form-group">
                        <label for="YYYY-MM-DD hh:mm:ss" class="form-control-label"><h4>Start Date</h4></label>
                        <input class="form-control" type="text" name="start_date" placeholder="YYYY-MM-DD hh:mm:ss">
                    </div>
                    <div class="form-group">
                        <label for="example-search-input" class="form-control-label"><h4>End Date</h4></label>
                        <input class="form-control" type="search" name="end_date" placeholder="YYYY-MM-DD hh:mm:ss">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1"> <h4>Parameter</h4></label>
                        <select class="form-control" name="parameter" type="text">
                          <option value="SOC">SOC</option>
                          <option value="SOC_BMS">SOC_BMS</option>
                          <option value="RPM">RPM</option>
                          <option value="Battery_Voltage">Battery_Voltage</option>
                          <option value="Battery_Current">Battery Current</option>
                        </select>
                    </div>

                    <h4>Limit Records</h4>
                    <div class="custom-control custom-radio mb-3">
                      <input type="radio" id="customRadio1" name="limit" value="10" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio1">10</label>
                    </div>
                    <div class="custom-control custom-radio mb-3">
                      <input type="radio" id="customRadio2" name="limit" value="50"class="custom-control-input">
                      <label class="custom-control-label" for="customRadio2">50</label>
                    </div>
                    <div class="custom-control custom-radio mb-3">
                      <input type="radio" id="customRadio3" name="limit" value="100" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio3">100</label>
                    </div>
                    <div class="custom-control custom-radio mb-3">
                      <input type="radio" id="customRadio4" name="limit" value="500" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio4">500</label>
                    </div>

                    <h4>Exclude N/A Values</h4>
                    <div>
                    <label class="custom-toggle">
                        <input type="checkbox" checked name="exclude" >
                        <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes" ></span>
                    </label>
                    </div>


                    <button class="btn btn-primary mt-3" type="plot">PLot Graph</button>
                    
                </form>

                </div>
            </nav>

            <div class="container-fluid mt-1">
                <div class="row">

                    <div class="col">
                        <div class="card" style="width: 70rem;">
                          <img class="card-img-top" src="../../assets/img/theme/img-1-1000x900.jpg" alt=" ">
                          <div class="card-body">
                            <div class="row justify-content-center mt-0 mb-0">
                                <body class="antialiased">
                                    <h2>State of Charge vs Time</h2>
                                    <div id="linechart"  style="width: 1100px; height: 500px"></div>

                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script type="text/javascript">
                                        var id = <?php echo $id; ?>;
                                        console.log(id);
                                        google.charts.load('current', {
                                            'packages': ['corechart']
                                        });
                                        google.charts.setOnLoadCallback(lineChart);

                                        function lineChart() {
                                            var data = google.visualization.arrayToDataTable(id);
                                            var options = {
                                                title: '',
                                                curveType: 'function',
                                                legend: {
                                                    position: 'bottom'
                                                },
                                                 hAxis: {
                                                    title: 'Date'
                                                },
                                                vAxis: {
                                                    title: 'SOC %'
                                                },
                                            };
                                            var chart = new google.visualization.LineChart(document.getElementById('linechart'));
                                            chart.draw(data, options);
                                        }        
                                    </script>
                                </body>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('')
