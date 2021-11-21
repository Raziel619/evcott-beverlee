@extends('layouts.app', ['class' => 'bg-default'])
@section('content')
<div class="header bg-gradient-primary py-7 py-lg-8">
    <div class="container">
        <div class="header-body text-center mt-4 mb-7">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-5 col-md-6">
                    <h1 class="text-white">{{ __('EV Analytics Dashboard') }}</h1>
                </div>
            </div>

            <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main ">
               <div class="container">
                <form action="dashplot" method="POST">
                @csrf

                    <h2>Select EV ID</h2>

                    <div class="form-group">
                        <label class="form-control-label"><h4>EV ID</h4></label>
                        <input class="form-control" type="text" name="ev_id" value="1">
                    </div>

                    <h4>Limit Records</h4>
                    <div class="custom-control custom-radio mb-3">
                      <input type="radio" id="customRadio1" name="limit" value="500" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio1">500</label>
                    </div>
                    <div class="custom-control custom-radio mb-3">
                      <input type="radio" id="customRadio2" name="limit" value="200"class="custom-control-input">
                      <label class="custom-control-label" for="customRadio2">200</label>
                    </div>
                    <div class="custom-control custom-radio mb-3">
                      <input type="radio" id="customRadio3" name="limit" value="100"class="custom-control-input">
                      <label class="custom-control-label" for="customRadio3">100</label>
                    </div>
                    <div class="custom-control custom-radio mb-3">
                      <input type="radio" id="customRadio4" name="limit" value="50" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio4">50</label>
                    </div>
                    <div class="custom-control custom-radio mb-3">
                      <input type="radio" id="customRadio5" name="limit" value="10" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio5">10</label>
                    </div>
                    
                    <button class="btn btn-primary mt-3" type="plot">Plot Graph</button>
                    
                </form>

                </div>
            </nav>

            <div class="container-fluid mt-0">
                <div class="row">

                    <div class="col">
                        <div class="card" style="width: 70rem;">
                          <img class="card-img-top" src="../../assets/img/theme/img-1-1000x900.jpg" alt=" ">
                          <div class="card-body">
                            <div class="row justify-content-center mt-0 mb-0">
                                <body class="antialiased">
                                    <h2>State of Charge (Dashboard)</h2>
                                    <div id="linechart"  style="width: 1100px; height: 400px"></div>

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
            <div class="container-fluid mt-3">
                <div class="row">

                    <div class="col">
                        <div class="card" style="width: 70rem;">
                          <img class="card-img-top" src="../../assets/img/theme/img-1-1000x900.jpg" alt=" ">
                          <div class="card-body">
                            <div class="row justify-content-center mt-0 mb-0">
                                <body class="antialiased">
                                    <h2>State of Charge (BMS)</h2>
                                    <div id="linechart2"  style="width: 1100px; height: 400px"></div>

                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script type="text/javascript">
                                        var id_2 = <?php echo $id_2; ?>;
                                        console.log(id_2);
                                        google.charts.load('current', {
                                            'packages': ['corechart']
                                        });
                                        google.charts.setOnLoadCallback(lineChart);

                                        function lineChart() {
                                            var data = google.visualization.arrayToDataTable(id_2);
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
                                                    title: 'SOC (BMS) %'
                                                },
                                            };
                                            var chart_2 = new google.visualization.LineChart(document.getElementById('linechart2'));
                                            chart_2.draw(data, options);
                                        }        
                                    </script>
                                </body>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="container-fluid mt-3">
                <div class="row">

                    <div class="col">
                        <div class="card" style="width: 70rem;">
                          <img class="card-img-top" src="../../assets/img/theme/img-1-1000x900.jpg" alt=" ">
                          <div class="card-body">
                            <div class="row justify-content-center mt-0 mb-0">
                                <body class="antialiased">
                                    <h2>Drive Motor Speed</h2>
                                    <div id="linechart3"  style="width: 1100px; height: 400px"></div>

                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script type="text/javascript">
                                        var id_3 = <?php echo $id_3; ?>;
                                        console.log(id_3);
                                        google.charts.load('current', {
                                            'packages': ['corechart']
                                        });
                                        google.charts.setOnLoadCallback(lineChart);

                                        function lineChart() {
                                            var data = google.visualization.arrayToDataTable(id_3);
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
                                                    title: 'RPM'
                                                },
                                            };
                                            var chart_3 = new google.visualization.LineChart(document.getElementById('linechart3'));
                                            chart_3.draw(data, options);
                                        }        
                                    </script>
                                </body>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-3">
                <div class="row">

                    <div class="col">
                        <div class="card" style="width: 70rem;">
                          <img class="card-img-top" src="../../assets/img/theme/img-1-1000x900.jpg" alt=" ">
                          <div class="card-body">
                            <div class="row justify-content-center mt-0 mb-0">
                                <body class="antialiased">
                                    <h2>Battery Pack Voltage</h2>
                                    <div id="linechart4"  style="width: 1100px; height: 400px"></div>

                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script type="text/javascript">
                                        var id_4 = <?php echo $id_4; ?>;
                                        console.log(id_4);
                                        google.charts.load('current', {
                                            'packages': ['corechart']
                                        });
                                        google.charts.setOnLoadCallback(lineChart);

                                        function lineChart() {
                                            var data = google.visualization.arrayToDataTable(id_4);
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
                                                    title: 'Voltage / V'
                                                },
                                            };
                                            var chart_4 = new google.visualization.LineChart(document.getElementById('linechart4'));
                                            chart_4.draw(data, options);
                                        }        
                                    </script>
                                </body>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-3">
                <div class="row">

                    <div class="col">
                        <div class="card" style="width: 70rem;">
                          <img class="card-img-top" src="../../assets/img/theme/img-1-1000x900.jpg" alt=" ">
                          <div class="card-body">
                            <div class="row justify-content-center mt-0 mb-0">
                                <body class="antialiased">
                                    <h2>Battery Current</h2>
                                    <div id="linechart5"  style="width: 1100px; height: 400px"></div>

                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script type="text/javascript">
                                        var id_5 = <?php echo $id_5; ?>;
                                        console.log(id_5);
                                        google.charts.load('current', {
                                            'packages': ['corechart']
                                        });
                                        google.charts.setOnLoadCallback(lineChart);

                                        function lineChart() {
                                            var data = google.visualization.arrayToDataTable(id_5);
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
                                                    title: 'Current / A'
                                                },
                                            };
                                            var chart_5 = new google.visualization.LineChart(document.getElementById('linechart5'));
                                            chart_5.draw(data, options);
                                        }        
                                    </script>
                                </body>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-3">
                <div class="row">

                    <div class="col">
                        <div class="card" style="width: 70rem;">
                          <img class="card-img-top" src="../../assets/img/theme/img-1-1000x900.jpg" alt=" ">
                          <div class="card-body">
                            <div class="row justify-content-center mt-0 mb-0">
                                <body class="antialiased">
                                    <h2>State of Health</h2>
                                    <div id="linechart6"  style="width: 1100px; height: 400px"></div>

                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script type="text/javascript">
                                        var id_6 = <?php echo $id_6; ?>;
                                        console.log(id_6);
                                        google.charts.load('current', {
                                            'packages': ['corechart']
                                        });
                                        google.charts.setOnLoadCallback(lineChart);

                                        function lineChart() {
                                            var data = google.visualization.arrayToDataTable(id_6);
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
                                                    title: 'SOH / %'
                                                },
                                            };
                                            var chart_6 = new google.visualization.LineChart(document.getElementById('linechart6'));
                                            chart_6.draw(data, options);
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
