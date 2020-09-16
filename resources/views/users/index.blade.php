@extends('layouts.app' , ['class' => '', 'elementActive' => 'users'])

@section('content')

<div class="container">
    <header class="">
        <h1 class="text-left p-5 border-bottom border-top">
                                  Users
                                  <i class=" float-right  btn-sm btn-primary" data-toggle="modal" data-target="#add_user">Add user</i>
                        </h1>
                                </div>


                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light  class= text-center">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Roles</th>

                                    </tr>
                                </thead>

                                @foreach($users as $user)
                    <tbody>
<tr  class="text-center">
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>

{{--                            {{$user->roles->nom}},--}}
                            </td>
                <td class="text-center"><a href="{{ route('users.edit', $user->id ) }}">
<button class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-pencil">Editer</span></button></a></td>
<td><form action="{{route('users.destroy',$user->id) }}" method="post"
 		onsubmit="return confirm('Êtes vous sûre ?')";>
 				{{ csrf_field() }}
                {{ method_field('DELETE') }}
<button type="submit" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove">Delete</span></button>
							 </form></td>

            </tr>
        </tbody>


@endforeach
</table>
</div>

<div class="modal fade" id="add_user">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add User</h5>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
            <form action="{{route('users.store')}}" method="post">
                            @csrf

                         <label for="Name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                        <label for="Email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                      <select class="custom-select mt-3">
                           @foreach($roles as $role)
                          <option value="{{$role->id}}">{{$role->nom}}</option>
                          @endforeach

                      </select>
                <select class="custom-select mt-3" name="wilaya">
                    <option selected disabled>select willaya</option>
                           @foreach($willay as $wl)
                          <option value="{{$wl->id}}">{{$wl->nom_wilaya}}</option>
                          @endforeach

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
