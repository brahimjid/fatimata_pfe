@extends('layouts.app' , ['class' => '', 'elementActive' => 'naissances'])

@section('content')
<div class="mt-5">
     
     <div class="container">
         <div class="card-header">
             <h3 class="card-title">Accouchement Numero : {{$accouchements->id}}</h3>
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-7">
   
    <hr>
    <p><strong>Fait dans hopital Numero :</strong> {{$accouchements->hopital_id}}</p>
    <p><strong>identifiant du patient :</strong> {{$accouchements->patient_id}}</p>
    <p><strong>Etat de nouveau né :</strong> {{$accouchements->etat_pat}}</p>
    <p><strong>Etat de patient :</strong> {{$accouchements->etat_nn}}</p>
    <p><strong>Le type d'accouchement :</strong> {{$accouchements->type}}</p>
        </div>
           </div>
            </div>
           
        </div>
        <div class="form-group pull-right">
                           <a href="{{route('accouchements.index')}}">
                           <button class="btn btn-primary btn-close">Back</button></a>
                         
                        </div>
    </div>




@endsection
