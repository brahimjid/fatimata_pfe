@extends('layouts.app' , ['class' => '', 'elementActive' => 'naissances'])

@section('content')

    <div class="container">
    <header class="">
        <h1 class="text-center p-5 border-bottom border-top">
            List des nouveau nées
            <i class="nc-icon nc-simple-add  float-right text-info" data-toggle="modal" data-target="#add_nais"></i>

        </h1>
    </header>
  
<div class="col-md-4">  
<form action="naissances/search" method="get" class="navbar-form navbar-left" role="search">
<div class="input-group custom-search-form">
<input type="text" name="search" class="form-control" placeholder="Search...">
<span class="input-group-btn">
<button type="submit" class="btn btn-default-sm">
<i class="fa fa-search"></i></button>
</span>
</div>
</form>
</div>
    <table id="tab" class="table table-striped table-bordered mt-5 cin" style="width:100%">
        <thead>
            <tr class=" text-uppercase text-center ">
            <tr class="text-uppercase text-center">            
            <th>id_Né</th>
            <th>sexe</th>
            <th>Dat_naiss</th>
            <th>poids</th>
            <th></th>
            <th></th>
            </tr>
        </thead>
@foreach($naissances as $naissance)
<tbody>
<tr  class="text-uppercase text-center">
<td><a href="naissances/{{$naissance->id}}">{{$naissance->id}}</a></td>
<td>{{$naissance->sexe}}</td>
<td>{{$naissance->Dat_naiss}}</td>
<td>{{$naissance->poids}}</td>
<td ><a href="{{ route('naissances.edit', $naissance->id ) }}">
<button class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-pencil">Editer</span></button></a></td>
         <td>    <form action="{{route('naissances.destroy',$naissance->id) }}" method="post"
 		onsubmit="return confirm('Êtes vous sûre ?')";>
 				{{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
										 </form></td>
</tr>
</tbody>

@endforeach
</table>  

<br> 
<div class="m1-1 float-right ">
{{$naissances->links()}}
</div>
</div>
</div>

  <!-- ******* Insert naissance modal  ******* -->
  <div class="modal fade" id="add_nais">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title">Add nouveau né</h5>
                     <button class="close" data-dismiss="modal">&times;</button>
                 </div>
                 <div class="modal-body">
                     <div class="form-group">      
            <form action='{{route("naissances.store")}}' method="post">
                            @csrf
                            <label for="accouchement_id">accouchement_id</label>
                  <select name="accouchement_id" id="accouchement_id" class="form-control" require>
                 @foreach($accouchements as $accouchement)
                           <option value="{{$accouchement->id}}">
                           {{$accouchement->id}}</option>
                           @endforeach
                           </select>
                           <label for="patient_id" >patient_id</label>
                            <select name="patient_id" id="patient_id" class="form-control" required>
                           @foreach($patients as $patient)
                           <option value="{{$patient->id}}">
                           {{$patient->id}}</option>
                           @endforeach
                           </select>
                         <label for="Dat_naiss">Dat_naiss</label>
                        <input type="date" name="Dat_naiss" id="Dat_naiss" class="form-control" required>
                       <label for="poids">poids</label>
                        <input type="number" class="form-control" name="poids" id="poids" required>
                        <label for="" >Sexe_naiss: </label>
                            <select name="sexe" id="sexe" type="text" class="form-control" require>
                                        <option value="masculin">Masculin</option>
                                        <option value="feminin">Feminin</option>
                                    </select>
                           <label for="observation" >Observation: </label>
                           <input id="observation" type="text" class="form-control " name="observation" require>
                        <div class="modal-footer">
                            <input type="submit" value="insert" name="submit" required id="insert" class="btn btn-success btn-block">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
