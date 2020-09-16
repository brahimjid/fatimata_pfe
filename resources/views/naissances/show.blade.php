@extends('layouts.app' , ['class' => '', 'elementActive' => 'naissances'])

@section('content')
<div class="mt-5">
     
     <div class="container">
         <div class="card-header">
                <h3 class="card-title">Nouveau Né Numero : {{$naissances->id}}</h3>
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-7">
  
    <hr>
    <p><strong>Numero patient:</strong> {{$naissances->patient_id}}</p>
    <p><strong>Numero d'accouchement:</strong> {{$naissances->accouchement_id}}</p>
    <p><strong>Dat de naissance de nouveau né:</strong> {{$naissances->Dat_naiss}}</p>
    <p><strong>observation</strong> {{$naissances->observation}}</p>
    <p><strong>sexe:</strong> {{$naissances->sexe}}</p>
    <p><strong>Poids:</strong> {{$naissances->poids}}</p>
       
    </div>
           </div>
            </div>
            <div class="form-group pull-right">
                           <a href="{{route('naissances.index')}}">
                           <button class="btn btn-primary btn-close">Back</button></a>
                         
                        </div>
        </div>
      
    </div>




@endsection
