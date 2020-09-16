@extends('layouts.app' , ['class' => '', 'elementActive' => 'patients'])

@section('content')


<div class="container">
    <header class="">
        <h1 class="text-center p-5 border-bottom border-top">
            Information Personnelle de Patient
            <i class="nc-icon nc-simple-add  float-right text-info" data-toggle="modal" data-target="#add_pat"></i>

        </h1>
    </header>

<div class="col-md-6">
<form action="patients/search" method="get" class="navbar-form navbar-left" role="search">
<div class="input-group custom-search-form">
<input type="text" name="search" class="form-control" placeholder="Search...">
<span class="input-group-btn">
<button type="submit" class="btn btn-default-sm">
Rechercher</button>
</span>
</div>
</form>
</div>
    <table id="tab" class="table table-striped table-bordered mt-5 " style="width:100%">
        <thead>
            <tr class=" text-uppercase text-center ">

                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Poids</th>
                        <th>Telephone</th>
                        <th>Action</th>
            </tr>
        </thead>
        @foreach($patients as $patient)
                    <tbody>
<tr  class="text-uppercase text-center">

                            <td><a href="patients/{{$patient->id}}">{{$patient->nom}}</a></td>
                            <td>{{$patient->prenom}}</td>
                            <td>{{$patient->poids}}</td>
                            <td>{{$patient->telephone}}</td>
                <td class="text-center">
                    <span class="btn btn-primary mx-2 update_etudiant" data-toggle="modal" data-target="#update_pat">Editer</span>
                    <span class="nc-icon nc-simple-remove btn btn-danger mx-2 delete_etudiant" data-toggle="modal" data-target="#delete_pat"><i title="Suprimer"></i></span>
                </td>

            </tr>
        </tbody>


@endforeach
</table>
</div>


<div class="modal fade" id="add_pat">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Patient</h5>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
            <form action="{{route('patients.store')}}" method="post">
                            @csrf

                         <label for="nom">nom</label>
                        <input type="text" name="nom" id="nom" class="form-control" required>
                        <label for="prenom">prenom</label>
                        <input type="text" name="prenom" id="prenom" class="form-control" required>
                        <label for="age">age</label>
                        <input type="number" name="age" id="age" class="form-control" required>
                        <label for="telephone">telephone</label>
                        <input type="number" name="telephone" id="telephone" class="form-control" required>
                        <label for="nom_mari">nom_mari</label>
                        <input type="text"  name="nom_mari" id="nom_mari" class="form-control" required>
                        <label for="observation">observation</label>
                       <input name="observation" type="text" id="observation" class="form-control" required>
                       <label for="poids">duree_gross</label>
                       <input type="number" class="form-control" name="duree_gross" id="duree_gross" required>
                       <label for="poids">poids</label>
                        <input type="number" class="form-control" name="poids" id="poids" required>
                        <div class="modal-footer">
                            <input type="submit" value="insert" name="submit" required id="insert" class="btn btn-success btn-block">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="update_pat">
    <div class="modal-dialog">

{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h5 class="modal-title">Update Patient</h5>--}}
{{--                <button class="close w-25" data-dismiss="modal">&times;</button>--}}
{{--            </div>--}}

{{--            <div class="modal-body">--}}

{{--                <div class="form-group">--}}
{{--                    <form action="{{route('patients.update'}}" method="post">--}}
{{--                            @csrf--}}
{{--                            @method('put')--}}

{{--                    <label for="nom">nom</label>--}}
{{--                        <input type="text" name="nom" id="nom" class="form-control" value="{{$patient->nom}}">--}}
{{--                        <label for="prenom">prenom</label>--}}
{{--                        <input type="text" name="prenom" id="prenom" class="form-control" value="{{$patient->prenom}}" >--}}
{{--                        <label for="age">age</label>--}}
{{--                        <input type="number" name="age" id="age" class="form-control" value="{{$patient->age}}">--}}
{{--                        <label for="telephone">telephone</label>--}}
{{--                        <input type="number" name="telephone" id="telephone" class="form-control" value="{{$patient->telephone}}" >--}}
{{--                        <label for="nom_mari">nom_mari</label>--}}
{{--                        <input type="text"  name="nom_mari" id="nom_mari" class="form-control" value="{{$patient->nom_mari}}">--}}
{{--                        <label for="observation">observation</label>--}}
{{--                       <input name="observation" type="text" id="observation" class="form-control"  value="{{$patient->observation}}" >--}}
{{--                       <label for="poids">duree_gross</label>--}}
{{--                       <input type="number" class="form-control" name="duree_gross" id="duree_gross" value="{{$patient->duree_gross}}" >--}}
{{--                       <label for="poids">poids</label>--}}
{{--                        <input type="number" class="form-control" name="poids" id="poids" value="{{$patient->poids}}">--}}

{{--                        <div class="modal-footer">--}}
{{--                            <input type="submit" value="UPdate" name="submit" id="insert" class="btn btn-primary btn-block">--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>





<!--   Delete modal -->
{{--<div class="modal fade" id="delete_pat">--}}
{{--    <div class="modal-dialog">--}}

{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h5 class="modal-title">delete Patient</h5>--}}
{{--                <button class="close" data-dismiss="modal">&times;</button>--}}
{{--            </div>--}}

{{--            <div class="modal-body">--}}
{{--            <form action="{{route('patients.destroy',$patient->id) }}" method="post">--}}
{{--                {{ csrf_field() }}--}}
{{--                {{ method_field('DELETE') }}--}}
{{--                    <input type="hidden" name='id' id="id">--}}
{{--                    <h4 class="text-center">do you want to delete this patient ?</h4>--}}
{{--                    <div class="modal-footer">--}}
{{--                        <button type="submit" name="submit" id="" class="btn btn-primary ml-1"> Yes </button>--}}
{{--                        <button id="insert" class="btn btn-danger ml-1" data-dismiss='modal'> No </button>--}}
{{--                    </div>--}}
{{--                </form>--}}


{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="m1-1 float-right ">--}}
{{--{{$patients->links()}}--}}
{{--</div>--}}

@endsection
