@extends('layouts.app', [
    'class' => '',
])

@section('content')
    @can('admin')


    <div class="content">

        <div class="row">
            <div class="col-md-6">

                <div class="card card-chart">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <canvas id="patientschart" width="400" height="200"></canvas>
                    </div>
                    <div class="card-footer">
                        <div class="chart-legend">
                            <i class="fa fa-circle"></i> nombre de patient par mois

                        </div>
                        <hr/>

                    </div>
                </div>
            </div>


            <div class="col-md-6">

                <div class="card card-chart">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <canvas id="cesariaschart" width="400" height="200"></canvas>
                    </div>
                    <div class="card-footer">
                        <div class="chart-legend">
                            <i class="fa fa-circle text-success"></i> nombre cesariat

                        </div>
                        <hr/>

                    </div>
                </div>
            </div>
        </div>
    <div class="row">

        <div class="col-md-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-title">Statistiques</h5>
                    <p class="card-category">Nombre d'Accouchement et Nouveau Nees</p>
                </div>
                <div class="card-body">
                    <canvas id="nbreDecedesChart" width="400" height="50"></canvas>
                </div>
                <div class="card-footer">
                    <div class="chart-legend">
                        <i class="fa fa-circle text-info"></i> nombre d'Accouchement par mois
                        <br>
                    </div>
                    <hr/>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-title"></h5>
                    <p class="card-category">Nombre d'Accouchement et Nouveau Nees</p>
                </div>
                <div class="card-body">
                    <canvas id="speedChart" width="400" height="50"></canvas>
                </div>
                <div class="card-footer">
                    <div class="chart-legend">
                        <i class="fa fa-circle text-info"></i> nombre d'Accouchement par mois
                        <br>
                        <i class="fa fa-circle text-warning"></i> nombre de Nouveau Nees par mois
                    </div>
                    <hr/>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-chart">
        <div class="card-header">
            <h5 class="card-title">Willaya</h5>

        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>

                    <th>Nom Willaya</th>

                </tr>
                </thead>
                <tbody>
                @foreach($willaya as $wl)
                    <tr>
                        <td>
                            <a href="{{route('wilayaSt',$wl->id)}}">
                                {{$wl->nom_wilaya}}
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="chart-legend">
                {{ $willaya->links() }}
            </div>
            <hr/>
        </div>
    </div>


    </div>
    @endcan
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            const patients = [];
            $.ajax({
                url: '{{route('home')}}',
                success: function (data) {
                    $.each(data.data3, function (ind, val) {
                        patients.push(val)
                    })


                }
            });

            const dataCesariat = [];
            $.ajax({
                url: '{{route('home')}}',
                success: function (data) {
                    console.log(data)
                    $.each(data.dataCesariat, function (ind, val) {
                        dataCesariat.push(val)
                    })

                }
            });
            //  console.log(patients)

            var ctx = document.getElementById('patientschart');
            var ctx2 = document.getElementById('cesariaschart');
            var cesariachart = new Chart(ctx2, {
                type: 'line',
                data: {
                    labels: ["Jan", "Fev", "Mar", "Avr", "Mai", "Jui", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        //label: '# of Votes',
                        data: dataCesariat,
                        backgroundColor: [
                            'rgba(144,249,149, 0.8)',
                            'rgba(144,249,149, 0.8)',
                            'rgba(144,249,149, 0.8)',
                            'rgba(144,249,149, 0.8)',
                            'rgba(144,249,149, 0.8)',
                            'rgba(144,249,149, 0.8)'
                        ],
                        borderColor: [
                            'rgb(144,249,149,1)',
                            'rgb(144,249,149,1)',
                            'rgb(144,249,149,1)',
                            'rgb(144,249,149,1)',
                            'rgb(144,249,149,1)',
                            'rgb(144,249,149,1)',

                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    legend: {
                        display: false,
                        position: 'top'
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                min: 0
                                , callback: function (val) {
                                    if (val == 0 || val == 5) {
                                        return null;
                                    }
                                    return Number.isInteger(val) ? val : null;
                                }
                            }
                        }]
                    }
                }
            });
            var patientschart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ["Jan", "Fev", "Mar", "Avr", "Mai", "Jui", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        //label: '# of Votes',
                        data: patients,
                        backgroundColor: [
                            'rgba(144,249,149, 0.8)',
                            'rgba(144,249,149, 0.8)',
                            'rgba(144,249,149, 0.8)',
                            'rgba(144,249,149, 0.8)',
                            'rgba(144,249,149, 0.8)',
                            'rgba(144,249,149, 0.8)'
                        ],
                        borderColor: [
                            'rgb(144,249,149,1)',
                            'rgb(144,249,149,1)',
                            'rgb(144,249,149,1)',
                            'rgb(144,249,149,1)',
                            'rgb(144,249,149,1)',
                            'rgb(144,249,149,1)',

                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    legend: {
                        display: false,
                        position: 'top'
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                min: 0
                                , callback: function (val) {
                                    if (val == 0 || val == 5) {
                                        return null;
                                    }
                                    return Number.isInteger(val) ? val : null;
                                }
                            }
                        }]
                    }
                }
            });
        });
    </script>

@endpush
@push('scripts')
    <script>

        $(document).ready(function () {

            const pat = [];
            const nouveauNee = [];
            const Accouchemnets = [];
            $.ajax({
                url: '{{route('home')}}',
                success: function (data) {
                    console.log(data)

                    $.each(data.data1, function (ind, val) {
                        //console.log(data[ind])
                        nouveauNee.push(val)
                    });
                    $.each(data.data4, function (ind, val) {
                        //console.log(data[ind])
                        nouveauNee.push(val)
                    });
                    $.each(data.data2, function (ind, val) {
                        //console.log(data[ind])
                        Accouchemnets.push(val)
                    })


                }

            });
            var speedCanvas = document.getElementById("speedChart");

            var dataFirst = {
                data: nouveauNee,
                fill: false,
                borderColor: '#fbc658',
                backgroundColor: 'transparent',
                pointBorderColor: '#fbc658',
                pointRadius: 4,
                pointHoverRadius: 4,
                pointBorderWidth: 8,
            };

            var dataSecond = {
                data: Accouchemnets,
                fill: false,
                borderColor: '#51CACF',
                backgroundColor: 'transparent',
                pointBorderColor: '#51CACF',
                pointRadius: 4,
                pointHoverRadius: 4,
                pointBorderWidth: 8
            };

            var speedData = {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [dataFirst, dataSecond]
            };

            var chartOptions = {
                legend: {
                    display: false,
                    position: 'top'
                }, scales: {
                    yAxes: [{
                        ticks: {
                            min: 0
                            , callback: function (val) {
                                if (val == 0 || val == 5) {
                                    return null;
                                }
                                return Number.isInteger(val) ? val : null;
                            }
                        }
                    }]
                }

            };

            var lineChart = new Chart(speedCanvas, {
                type: 'line',
                hover: false,
                data: speedData,
                options: chartOptions
            });
        });
    </script>
@endpush

@push('scripts')
    <script>
        $(document).ready(function () {

            const nouveauNee = [];
            const nouveauAccouchemnets = [];
            $.ajax({
                url: '{{route('home')}}',
                success: function (data) {
                    console.log(data)

                    $.each(data.data1, function (ind, val) {
                        //console.log(data[ind])
                        nouveauNee.push(val)
                    });
                    $.each(data.data2, function (ind, val) {
                        //console.log(data[ind])
                        nouveauAccouchemnets.push(val)
                    })


                }

            });
            var speedCanvas = document.getElementById("speedChart");

            var dataFirst = {
                data: nouveauNee,
                fill: false,
                borderColor: '#fbc658',
                backgroundColor: 'transparent',
                pointBorderColor: '#fbc658',
                pointRadius: 4,
                pointHoverRadius: 4,
                pointBorderWidth: 8,
            };

            var dataSecond = {
                data: nouveauAccouchemnets,
                fill: false,
                borderColor: '#51CACF',
                backgroundColor: 'transparent',
                pointBorderColor: '#51CACF',
                pointRadius: 4,
                pointHoverRadius: 4,
                pointBorderWidth: 8
            };

            var speedData = {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [dataFirst, dataSecond]
            };

            var chartOptions = {
                legend: {
                    display: false,
                    position: 'top'
                }
            };
            var lineChart = new Chart(speedCanvas, {
                type: 'line',
                hover: false,
                data: speedData,
                options: chartOptions
            });
            // second chart
            var ctx = document.getElementById('mychart78');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3], // data 1
                        backgroundColor: 'rgb(7,37,245)',
                        borderWidth: 1
                    },
                        {
                            label: '# of Votes',
                            data: [12, 19, 3, 5, 2, 3], // data2
                            backgroundColor: 'rgb(227,12,58)',
                            borderWidth: 1
                        }


                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        });
    </script>
@endpush
