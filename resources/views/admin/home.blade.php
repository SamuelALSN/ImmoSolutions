@extends('layouts.app')
@section('content')
    @include('common.header')
    <div class="app-body">
        <div class="sidebar">
            @include('common.sidebar')
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>
        <main class="main">
            <!-- Breadcrumb-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">@lang("Accueil")</li>
                <li class="breadcrumb-item">
                    <a href="#">Admin</a>
                </li>
                <li class="breadcrumb-item active">@lang("Tableau de Bord")</li>
                <!-- Breadcrumb Menu-->
                <li class="breadcrumb-menu d-md-down-none">
                    <div class="btn-group" role="group" aria-label="Button group">
                        <a class="btn" href="#">
                            <i class="icon-speech"></i>
                        </a>
                        <a class="btn" href="./">
                            <i class="icon-graph"></i> @lang("Tableau de Bord")</a>
                        <a class="btn" href="#">
                            <i class="icon-settings"></i> @lang("Paramètres")</a>
                    </div>
                </li>
            </ol>
            <div class="container-fluid">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-primary">
                                <div class="card-body pb-0">
                                    <div class="btn-group float-right">
                                        <button class="btn btn-transparent dropdown-toggle p-0" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-settings"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                    <div class="text-value">{{$propertycount}}</div>
                                    <div>@lang("Bien Publiés")</div>
                                </div>
                                <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                                    <canvas class="chart" id="card-chart1" height="70"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-->
                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-info">
                                <div class="card-body pb-0">
                                    <button class="btn btn-transparent p-0 float-right" type="button">
                                        <i class="icon-location-pin"></i>
                                    </button>
                                    <div class="text-value">{{ count($reservationcount)}}</div>
                                    <div>@lang("Réservations")</div>
                                </div>
                                <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                                    <canvas class="chart" id="card-chart2" height="70"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-->
                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-warning">
                                <div class="card-body pb-0">
                                    <div class="btn-group float-right">
                                        <button class="btn btn-transparent dropdown-toggle p-0" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-settings"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                    <div class="text-value">{{count($supervise)}}</div>
                                    <div>@lang("Biens supevisés")</div>
                                </div>
                                <div class="chart-wrapper mt-3" style="height:70px;">
                                    <canvas class="chart" id="card-chart3" height="70"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-->
                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-danger">
                                <div class="card-body pb-0">
                                    <div class="btn-group float-right">
                                        <button class="btn btn-transparent dropdown-toggle p-0" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-settings"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                    <div class="text-value">{{$usercount}}</div>
                                    <div>@lang("Utilisateurs")</div>
                                </div>
                                <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                                    <canvas class="chart" id="card-chart4" height="70"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-->
                    </div>
                    <!-- /.row-->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h4 class="card-title mb-0">@lang("Suivi des réservations")</h4>
                                    <div class="small text-muted">{{ Carbon\Carbon::now()->toDateTimeString()}}</div>
                                </div>
                                <!-- /.col-->
                                <div class="col-sm-7 d-none d-md-block">
                                    <button class="btn btn-primary float-right" type="button">
                                        <i class="icon-cloud-download"></i>
                                    </button>
                                    <div class="btn-group btn-group-toggle float-right mr-3" data-toggle="buttons">
                                        <label class="btn btn-outline-secondary">
                                            <input id="option1" type="radio" name="options" autocomplete="off"> Day
                                        </label>
                                        <label class="btn btn-outline-secondary active">
                                            <input id="option2" type="radio" name="options" autocomplete="off"
                                                   checked=""> Month
                                        </label>
                                        <label class="btn btn-outline-secondary">
                                            <input id="option3" type="radio" name="options" autocomplete="off"> Year
                                        </label>
                                    </div>
                                </div>
                                <!-- /.col-->
                            </div>
                            <!-- /.row-->
                            <div class="chart-wrapper" style="height:300px;margin-top:40px;">
                                <canvas class="chart" id="main-chart" height="300"></canvas>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row text-center">
                                <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                    <div class="text-muted">Visite</div>
                                    <strong>29.703 @lang("Utilisateurs") (40%)</strong>
                                    <div class="progress progress-xs mt-2">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 40%"
                                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                    <div class="text-muted">@lang("Consultation")</div>
                                    <strong>24.093 Utilisateurs (20%)</strong>
                                    <div class="progress progress-xs mt-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 20%"
                                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                    <div class="text-muted">NewsLetter</div>
                                    <strong>78.706 @lang("Mail") (60%)</strong>
                                    <div class="progress progress-xs mt-2">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%"
                                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                    <div class="text-muted">@lang("Nouveau Utilisateurs")</div>
                                    <strong>22.123 @lang("Inscrits") (80%)</strong>
                                    <div class="progress progress-xs mt-2">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 80%"
                                             aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                    <div class="text-muted">@lang("Taux de Rebond")</div>
                                    <strong>40.15%</strong>
                                    <div class="progress progress-xs mt-2">
                                        <div class="progress-bar" role="progressbar" style="width: 40%"
                                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>
    </div>
@endsection
@section('script')
    <!-- Plugins and scripts required by this view-->
    <script src="{{asset('js/chart.js-2.8.0/dist/Chart.min.js')}}"></script>
    <script src="{{asset('js/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js')}}"></script>

    <script src="{{asset('js/main.js')}}"></script>
{{--    <script>--}}
{{--        var url="{{url('/show-charts')}}";--}}
{{--        var Month = new Array();--}}
{{--        var Labels = new Array();--}}

{{--       // $(document).ready(function(data){--}}
{{--           $.get(url,function (response) {--}}
{{--               response.forEach(function(data){--}}
{{--                   Month.push(data.created_at);--}}
{{--                   Labels.push(data.user_id);--}}
{{--               });--}}
{{--               console.log(Month);--}}
{{--               var ctx = document.getElementById('main-chart');--}}
{{--               var myChart = new Chart(ctx, {--}}
{{--                   type: 'bar',--}}
{{--                   data: {--}}
{{--                       labels: Month ,--}}
{{--                       backgroundColor: [--}}
{{--                           'rgba(255, 99, 132, 0.2)'],--}}
{{--                       datasets: [{--}}
{{--                           label: '# Réservations',--}}
{{--                           backgroundColor: [--}}
{{--                               'rgba(255, 99, 132, 0.2)'],--}}
{{--                           data: Labels ,--}}
{{--                           borderWidth: 1--}}
{{--                       }]--}}
{{--                   },--}}
{{--                   options: {--}}
{{--                       scales: {--}}
{{--                           yAxes: [{--}}
{{--                               ticks: {--}}
{{--                                   beginAtZero: true--}}
{{--                               }--}}
{{--                           }]--}}
{{--                       }--}}
{{--                   }--}}
{{--               });--}}
{{--           });--}}
{{--        //});--}}


{{--    </script>--}}
{{--    <script>--}}
{{--        var url = "{{url('stock/chart')}}";--}}
{{--        var Years = new Array();--}}
{{--        var Labels = new Array();--}}
{{--        var Prices = new Array();--}}
{{--        $(document).ready(function(){--}}
{{--            $.get(url, function(response){--}}
{{--                response.forEach(function(data){--}}
{{--                    Years.push(data.stockYear);--}}
{{--                    Labels.push(data.stockName);--}}
{{--                    Prices.push(data.stockPrice);--}}
{{--                });--}}
{{--                var ctx = document.getElementById("canvas").getContext('2d');--}}
{{--                var myChart = new Chart(ctx, {--}}
{{--                    type: 'bar',--}}
{{--                    data: {--}}
{{--                        labels:Years,--}}
{{--                        datasets: [{--}}
{{--                            label: 'Infosys Price',--}}
{{--                            data: Prices,--}}
{{--                            borderWidth: 1--}}
{{--                        }]--}}
{{--                    },--}}
{{--                    options: {--}}
{{--                        scales: {--}}
{{--                            yAxes: [{--}}
{{--                                ticks: {--}}
{{--                                    beginAtZero:true--}}
{{--                                }--}}
{{--                            }]--}}
{{--                        }--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
@endsection
