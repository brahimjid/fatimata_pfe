@extends('layouts.app' , ['class' => '', 'elementActive' => 'accouchements'])

@section('content')

    <div class="mt-3">
  
            <div class="card-header">
                <h3 class="card-title">Edit Hopitals</h3>
            </div>
            <div class="card-body">
                <div class="row ">
                    <div class="col-md-7">
                        <form action="{{route('hopitals.update' , $hopitals->id)}}" method="post">
                            @csrf
                            @method('put')
                 
                            <label for="Nom" >Nom: </label>
                           <input id="Nom" type="text" class="form-control " name="Nom" value="{{$hopitals->Nom}}">
                        
            
                                <label for="">Departement_id</label>
                                <input name="Departement_id" id="Departement_id" class="form-control" value="{{$hopitals->Departement_id}}">
                                <div class="form-group pull-right">
                           <button type="submit" class="btn btn-primary ">Register</button>
                           <a href="{{route('hopitals.index')}}">
                           <button class="btn btn-default btn-close">Cancel</button></a>
                         
                        </div>
      </div>
      </form>                      </div>
                </div>
            </div>
        </div>
    </div>

@endsection