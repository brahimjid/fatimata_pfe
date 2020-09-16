<?php

namespace App\Http\Controllers;
use App\Hopital;
use App\Departement;
use Illuminate\Support\Facades\Gate;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HopitalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $hopitals=Hopital::paginate(4);
       // if(Gate::denies('agent_du_minister')){
           // return redirect()->route('home');
          // }
        return view('hopitals.index',['departements'=>Departement::all()],['hopitals'=>$hopitals]);
    }



    public function search(Request $request)
    {
        $search=$request->get('search');
        $hopitals=DB::table('hopitals')->where('Nom','like','%'.$search.'%')->paginate(3);
      // dd($patients);
      return view('hopitals.index',['departements'=>Departement::all()],['hopitals'=>$hopitals]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hopitals = Hopitale::findOrFail($id);
        return view('hopitals.create',compact('hopitals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hopitals =new Hopital();

        //dd($request->all());
        $hopitals->Nom=$request->Nom;
        $hopitals->Departement_id=$request->Departement_id;

        $hopitals->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hopitals =Hopital::find($id);
        return view('hopitals.show')->with('hopitals' , $hopitals);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hopitals = Hopital::findOrFail($id);
        return view('hopitals.edit',['departements'=>Departement::all()],['hopitals'=>$hopitals]);
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
        $hopitals=Hopital::FindOrFail($id);
        $hopitals->Nom=request()->input("Nom");
        $hopitals->Departement_id=request()->input("Departement_id");

              $hopitals->update();

              //return view("Patients.index");
              return redirect()->route("hopitals.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hopitals=Hopital::FindOrFail($id);
        $hopitals->delete();


      return redirect()->back();
    }
}
