<?php

namespace App\Http\Controllers;
use App\Role;
use App\User;
use App\Http\Requests\UserRequest;
use App\Wilaya;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {


       $users=User::all();
       $roles =Role::all();
       $willay = Wilaya::all();
       if(Gate::denies('admin')){
        return redirect()->route('home');
       }
        return view('users.index', [
            'users' => $model->paginate(15),
            'roles' => $roles,
            'willay'=>$willay
        ]);
    }
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        //dd($request->all());
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->wilaya_id = $request->wilaya;
        $user->save();
        //$user->wilaya_id = Auth::id();
//        User::create([
//            'name' => $request->name,
//            'email' => $request->email,
//            'password' => Hash::make($request->password),
//           // 'type' => $request->type,
//            'wilaya_id' => $request->wilaya,
//
//        ]);


        return redirect()->route('users.index')->with(['status' => 'User Ajouter']);
    }
    public function edit($id)
    {

        $users = User::all();
       $roles=Role::all();
        return view('users.edit',['roles'=>$roles,'user'=>User::find($id)])->with('users' , $users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
        ]);
        return redirect()->route('users.index');

    }
    public function update_role(Request $request, $id){
    $user = User::find($id);

    $user->roles()->sync($request->roles);

    return redirect()->route('users.index');
    }
    public function destroy($id)
    {
        $users = User::find($id);

        $users->delete();

       return redirect()->route('users.index')->with(['status' => 'Supprimer Avec']);
    }
}
