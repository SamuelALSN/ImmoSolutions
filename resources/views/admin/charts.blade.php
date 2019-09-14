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
                <li class="breadcrumb-item active">@lang("Tableau de Bord ")</li>
                <!-- Breadcrumb Menu-->
                <li class="breadcrumb-menu d-md-down-none">
                    <div class="btn-group" role="group" aria-label="Button group">
                        <a class="btn" href="#">
                            <i class="icon-speech"></i>
                        </a>
                        <a class="btn" href="./">
                            <i class="icon-graph"></i>  @lang("Tableau de Bord")</a>
                        <a class="btn" href="#">
                            <i class="icon-settings"></i> @lang("Paramètres")</a>
                    </div>
                </li>
            </ol>
            <div class="container-fluid">
                <div class="animated fadeIn">
                    <div class="card-columns cols-2">
                        <div class="card">
                            <div class="card-header"> @lang("Evolution des réservations par date ")
                                <div class="card-header-actions">
                                    <a class="card-header-action" href="" target="_blank">
                                        <small class="text-muted">@lang("Réservations")</small>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-wrapper">
                                    <canvas id="canvas-1"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">@lang("Connexions par localisation ")
                                <div class="card-header-actions">
                                    <a class="card-header-action" href="" target="_blank">
                                        <small class="text-muted">@lang("Top Connexions")</small>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-wrapper">
                                    <canvas id="canvas-2"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">@lang("Catégorie de biens les plus pubilés ")
                                <div class="card-header-actions">
                                    <a class="card-header-action" href="" target="_blank">
                                        <small class="text-muted">@lang("Top Catégories ")</small>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-wrapper">
                                    <canvas id="canvas-3"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">@lang("Visites")
                                <div class="card-header-actions">
                                    <a class="card-header-action" href="http://www.chartjs.org" target="_blank">
                                        <small class="text-muted">@lang("Top visites")</small>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-wrapper">
                                    <canvas id="canvas-4"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">@lang("Villes Contenant le plus de bien  ")
                                <div class="card-header-actions">
                                    <a class="card-header-action" href="" target="_blank">
                                        <small class="text-muted">@lang("Top Villes")</small>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-wrapper">
                                    <canvas id="canvas-5"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">@lang("Biens ayant été favoris")
                                <div class="card-header-actions">
                                    <a class="card-header-action" href="" target="_blank">
                                        <small class="text-muted">@lang("Top favoris")</small>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-wrapper">
                                    <canvas id="canvas-6"></canvas>
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
    <script src="{{asset('js/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{asset('js/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js')}}"></script>
    <script src="{{asset('js/charts.js')}}"></script>
    <script>
        var town = <?php print_r(json_encode($locality)) ?>;
         var categ = <?php print_r(json_encode($Scategories)) ?>;
         var resv = <?php print_r(json_encode($valid_res)) ?>;

            console.log(resv);
            var villes = new Array();
            var nombre = new Array();

            //var for categories

            var categories  = new Array();
            var occurences = new Array();

            town.forEach(function(data){
                villes.push(data.locality);
                nombre.push(data.occurrences)
                var pieChart = new Chart($('#canvas-5'), {
                    type: 'pie',
                    data: {
                        labels: villes,
                        datasets: [{
                            data: nombre,
                            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
                            hoverBackgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
                        }]
                    },
                    options: {
                        responsive: true
                    }
                }); // eslint-disable-next-line no-unused-vars

            });

            // statistic for categories

        categ.forEach(function(data){
            categories.push(data.name);
            occurences.push(data.occurrences);
            var doughnutChart = new Chart($('#canvas-3'), {
                type: 'doughnut',
                data: {
                    labels: categories,
                    datasets: [{
                        data: occurences,
                        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
                        hoverBackgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
                    }]
                },
                options: {
                    responsive: true
                }
            }); // eslint-disable-next-line no-unused-vars


        });

        var dates = new Array();
        var value = new Array();
        resv.forEach(function (data) {
            dates.push(data.created_at);
            value.push(data.count_row);
            var lineChart = new Chart($('#canvas-1'), {
                type: 'line',
                data: {

                    labels: dates,
                        // ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [{
                        label: 'Réservations',
                        backgroundColor: 'rgba(220, 220, 220, 0.2)',
                        borderColor: 'rgba(220, 220, 220, 1)',
                        pointBackgroundColor: 'rgba(220, 220, 220, 1)',
                        pointBorderColor: '#fff',
                        data:  value
                            // [random(), random(), random(), random(), random(), random(), random()]
                    }, {
                        label: 'Demandes de réservations ',
                        backgroundColor: 'rgba(151, 187, 205, 0.2)',
                        borderColor: 'rgba(151, 187, 205, 1)',
                        pointBackgroundColor: 'rgba(151, 187, 205, 1)',
                        pointBorderColor: '#fff',
                        data: [random(), random(), random(), random(), random(), random(), random()]
                    }]
                },
                options: {
                    responsive: true
                }
            }); // eslint-disable-next-line no-unused-vars

        });




    </script>
@endsection
