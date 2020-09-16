@extends('layouts.app', [
    'class' => '',
])
@section('content')

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
            <h5 class="card-title">Departements</h5>

        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>

                    <th>Nom du departement</th>

                </tr>
                </thead>
                <tbody>
                @foreach($departements as $departement)
                    <tr>
                        <td>
                            <a href="{{route('departementsHp',$departement->id)}}">
                                {{$departement->nom}}
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

    </div>

</div>

@endsection
