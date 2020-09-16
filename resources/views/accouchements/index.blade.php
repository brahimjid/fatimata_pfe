@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'accouchements'
])
@section('content')

<div class="mt-5">
<div class="container">
    <header class="">
        <h1 class="text-center p-5 border-bottom border-top">
            Accouchement List
            <i class="nc-icon nc-simple-add  float-right text-info" data-toggle="modal" data-target="#add_pat"></i>

        </h1>
    </header>
    <div class="col-md-4">  
<form action="accouchements/search" method="get" class="navbar-form navbar-left" role="search">
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
            <tr class="text-uppercase text-center ">
            <th>accouchement_id</th>
            <th>Date_accouchement</th>
            <th>etat_nn</th>
            <th>etat_patient</th>
            <th>type_accouchement</th>
            <th></th>
            <th></th>
            </tr>
        </thead>
@foreach($accouchements as $accouchement)
<tbody>
<tr  class="text-uppercase text-center">
<td><a href="accouchements/{{$accouchement->id}}">{{$accouchement->id}}</a></td>

<td>{{$accouchement->Dat_accouch}}</td>
<td>{{$accouchement->etat_nn}}</td>
<td>{{$accouchement->etat_pat}}</td>
<td> {{$accouchement->type}}</td>
 
<td class="text-center"><a href="{{ route('accouchements.edit', $accouchement->id ) }}">
<button class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-pencil">Editer</span></button></a></td>
       <td> <form action="{{route('accouchements.destroy',$accouchement->id) }}" method="post"
 		onsubmit="return confirm('Êtes vous sûre ?')";>
 				{{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
							 </form></td>
</tr>
</tbody>

@endforeach
</table>  
<div class="m1-1 float-right ">
{{$accouchements->links()}}
</div>
</div>
</div>

<div class="modal fade" id="add_pat">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Accouchement</h5>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">      
                <form action="{{route('accouchements.store')}}" method="post">
                            @csrf
                         
                            <label for="patient_id" >Identifiant du patient</label>
                            <select name="patient_id" id="patient_id" class="form-control" required>
                           @foreach($patients as $patient)
                           <option value="{{$patient->id}}">
                           {{$patient->id}}</option>
                           @endforeach
                           </select>
                           <label for="hopital_id" >hop_id</label>
                     <select name="hopital_id" id="hopital_id" class="form-control" required>
                    @foreach($hopitals as $hopital)
                    <option value="{{$hopital->id}}">
                    {{$hopital->id}}</option>
                    @endforeach
                    </select>
                    <label for="Dat_accouch">Date Accouchement</label>
                        <input type="date" name="Dat_accouch" id="Dat_accouch" class="form-control" required>
                    <label for="etat_nn">Etat nouveau nee</label>
                                    <select name="etat_nn" id="" class="form-control">
                                        <option value="mort">Mort</option>
                                        <option value="vivant">Vivant</option>
                                    </select>
                                    <label for="etat_pat">Etat patient</label>
                                    <select name="etat_pat" id="" class="form-control">
                                        <option value="mort">Mort</option>
                                        <option value="vivant">Vivant</option>
                                    </select>
                                    <label for="type">type</label>
                                <select name="type" id="" class="form-control">
                                    <option value="normal">Normal</option>
                                    <option value="cesaria">Cesaria</option>
                                </select>
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
