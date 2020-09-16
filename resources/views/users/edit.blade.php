@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'users'
])
@section('content')
<div class="container mt-3">
<h3 >Edit User</h3>

    <form action="{{route('users.update_role', $user->id)}}" method="post">
                        @csrf
                        @method('post')
                        @foreach($roles as $role)
                            <div class="form-group">
                                <input type="checkbox" class="form-check-input" name="roles[]" value="{{$role->id}}"
                                       id="{{$role->id}}"
                                @foreach($user->roles as $userRole)
                                    @if($userRole->id === $role->id )
                                        checked
                                        @endif
                                    @endforeach
                                <label for="{{$role->id}}" class="form-check-label"> {{$role->nom}} </label>
       </div>

                        @endforeach
                        <button type="submit" class="btn btn-primary">modifier les roles</button>
                    </form>
  

  

<!-- end row -->
</div>
<!-- end #content -->



@endsection