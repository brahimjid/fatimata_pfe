@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'hopitals'
])

@section('content')
<div class="container">
    <header class="">
        <h1 class="text-center p-5 border-bottom border-top">
        list des hopitaux
            <i class="nc-icon nc-simple-add  float-right text-info" data-toggle="modal" data-target="#add_pat"></i>

        </h1>
<div class="col-md-4">  
<form action="hopitals/search" method="get" class="navbar-form navbar-left" role="search">
<div class="input-group custom-search-form">
<input type="text" name="search" class="form-control" placeholder="Search...">
<span class="input-group-btn">
<button type="submit" class="btn btn-default-sm">
<i class="fa fa-search"></i></button>
</span>
</div>
</form>
</div>
    </header>
    <table id="tab" class="table table-striped table-bordered mt-5 " style="width:100%">
        <thead>
            <tr class=" text-uppercase text-center ">

            <th>Nom_hop</th>
            <th>Departement_id</th>
            <th></th>
            <th></th>
            </tr>
        </thead>
            @foreach($hopitals as $hopital)
            <tbody>
<tr  class="text-uppercase text-center">
                            
<td>{{$hopital->Nom}}</a></td>
<td>{{$hopital->Departement_id}}</td>

<td ><a href="{{ route('hopitals.edit', $hopital->id ) }}">
<button class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-pencil">Editer</button></a></td>
   <td>   <form action="{{route('hopitals.destroy',$hopital->id) }}" method="post"
 		onsubmit="return confirm('Êtes vous sûre ?')";>
 				{{ csrf_field() }}
                {{ method_field('DELETE') }}
<button type="submit" class="btn btn-sm btn-danger">Delete</button>
							 </form></td>
 
</tr>
</tbody>

@endforeach
</table>
</div>

<div class="modal fade" id="add_pat">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Hopital</h5>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">      
<form action='{{route("hopitals.store")}}' method="post">
                @csrf
               <label for="Departement_id">Departement_id</label>
                 <select name="Departement_id" id="Departement_id" class="form-control">

                      @foreach($departements as $departement)
                <option value="{{$departement->id}}">{{$departement->id}}</option>
                                @endforeach
                 </select>
                            <label for="Nom" >Nom </label>
                           <input id="Nom" type="text" class="form-control " name="Nom"require>
                           <input type="submit" value="insert" name="submit" required id="insert" class="btn btn-success btn-block">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
      
  
<br>
 
<div class="m1-1 float-right ">
{{$hopitals->links()}}
</div>

@endsection

