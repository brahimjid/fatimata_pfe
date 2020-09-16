@extends('layouts.app' , ['class' => '', 'elementActive' => 'accouchements'])

@section('content')

    <div class="mt-3">
    
  
  <div class="card-header">
                <h3 class="card-title">Modifier Accouchement</h3>
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <form action="{{route('accouchements.update' , $accouchements->id)}}" method="post">
                            @csrf
                            @method('put')
                         
                            <label for="patient_id" >Identifiant du patient</label>
                            <select name="patient_id" id="patient_id" class="form-control" value="{{$accouchements->patient_id}}">
                           @foreach($patients as $patient)
                           <option value="{{$patient->id}}">
                           {{$patient->id}}</option>
                           @endforeach
                           </select>
                   
                                    <label for="hopital_id">Hopital</label>
                                    <select name="hopital_id" id="hopital_id" class="form-control" value="{{$accouchements->hopital_id}}">

                                        @foreach($hopitals as $hopital)
                                            <option value="{{$hopital->id}}">{{$hopital->id}}</option>
                                        @endforeach

                                    </select>
                                
                                <label for="Dat_accouch" >date_accouchement: </label>
                           <input id="Dat_accouch" type="date" class="form-control " name="Dat_accouch" value="{{$accouchements->Dat_accouch}}">
                          
                                    <label for="etat_nn">Etat nouveau nee</label>
                                    <select name="etat_nn" id="etat_nn" class="form-control" value="{{$accouchements->etat_nn}}">
                                        <option value="mort">Mort</option>
                                        <option value="vivant">Vivant</option>
                                    </select>
                            

                                    <label for="etat_pat">Etat patient</label>
                                    <select name="etat_pat" id="etat_pat" class="form-control" value="{{$accouchements->etat_pat}}">
                                        <option value="mort">Mort</option>
                                        <option value="vivant">Vivant</option>
                                    </select>
                                 <label for="type">Type</label>
                                    <select name="type" id="type" class="form-control" value="{{$accouchements->type}}">
                                        <option value="normal">Normal</option>
                                        <option value="cesaria">Cesaria</option>
                                    </select>
                                    <div class="form-group pull-right">
                           <button type="submit" class="btn btn-primary ">Register</button>
                           <a href="{{route('accouchements.index')}}">
                           <button class="btn btn-default btn-close">Cancel</button></a>
                         
                        </div>
                          
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
