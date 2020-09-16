@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'naissance'
])
@section('content')  <div class="mt-3">
    
  
    <div class="card-header">
   
<h3 class="card-title">Modifier Nouveau né</h3> </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-7">
               <form action="{{route('naissances.update',$naissances->id) }}" method="post">
                @csrf
                 @method('put')
                
                 <div class=" form-group ">
                     
                     <label for="" >accouchement_id</label>
                     <select name="accouchement_id" id="accouchement_id" class="form-control" value="{{$naissances->accouchement_id}}">
                    @foreach($accouchements as $accouchement)
                    <option value="{{$accouchement->id}}">
                    {{$accouchement->id}}</option>
                    @endforeach
                    </select>
                   
                     <label for="patient_id" >patient_id</label>
                     <select name="patient_id" id="patient_id" class="form-control" value="{{$naissances->patient_id}}">
                    @foreach($patients as $patient)
                    <option value="{{$patient->id}}">
                    {{$patient->id}}</option>
                    @endforeach
                    </select>
                    </div>
                    <label for="Dat_naiss">Dat_naiss</label>
                        <input type="date" name="Dat_naiss" id="Dat_naiss" class="form-control" value="{{$naissances->Dat_naiss}}">
                       <label for="poids">poids</label>
                        <input type="number" class="form-control" name="poids" id="poids" value="{{$naissances->poids}}">
                        <label for="" >Sexe_naiss: </label>
                            <select name="sexe" id="sexe" type="text" class="form-control" value="{{$naissances->sexe}}">
                                        <option value="masculin">Masculin</option>
                                        <option value="feminin">Feminin</option>
                                    </select>
                        <label for="observation" >Observation: </label>
                           <input id="observation" type="text" class="form-control " name="observation" value="{{$naissances->observation}}">
                           <div class="form-group pull-right">
                           <button type="submit" class="btn btn-primary ">Register</button>
                           <a href="{{route('naissances.index')}}">
                           <button class="btn btn-default btn-close">Cancel</button></a>
                         
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection