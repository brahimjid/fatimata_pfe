@extends('layouts.app' , ['class' => '', 'elementActive' => 'hopitals'])

@section('content')
    <div class="mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">hopital</h3>
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-7">
    <h3>{{$hopitals->Nom_hop}}</h3>
    <hr>
    <p><strong> hopital numero :</strong> {{$hopitals->Num_hop}}</p>
    <p><strong> Appartient au Departement:</strong> {{$hopitals->Departement_nom}}</p>

        </div>
           </div>
            </div>
        </div>
    </div>




@endsection
