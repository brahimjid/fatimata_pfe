@extends('layouts.app' , ['class' => '', 'elementActive' => 'patients'])

@section('content')
    <div class="mt-5">
     
        <div class="container">
            <div class="card-header">
                <h3 class="card-title">Patient</h3>
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-7">
    <h1>{{$patient->nom}}</h1>
    <hr>
    <p><strong>prenom :</strong> {{$patient->prenom}}</p>
    <p><strong>duree du grossesse:</strong> {{$patient->duree_gross}}</p>
    <p><strong>telephone:</strong> {{$patient->telephone}}</p>
    <p><strong>le nom de son mari:</strong> {{$patient->nom_mari}}</p>
    <p><strong>age:</strong> {{$patient->age}}</p>
    <p><strong>Poids:</strong> {{$patient->poids}}</p>
        </div>
           </div>
            </div>
        </div>
    </div>




@endsection
