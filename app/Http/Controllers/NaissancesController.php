<?php

namespace App\Http\Controllers;
use App\NouveauNee;
use App\Patient;
use App\Accouchement;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;

class NaissancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        if(Gate::denies('medecin')){
            return redirect()->route('home');}
        $naissances=NouveauNee::paginate(3);
        return view('naissances.index',['patients'=>Patient::all(),'accouchements'=>Accouchement::all()],['naissances'=>$naissances]);
    }


    public function search(Request $request)
    {
        $search=$request->get('search');
        $naissances=DB::table('nouveau_nees')->where('id','like','%'.$search.'%')->paginate(3);
      // dd($patients);
      return view('naissances.index',['patients'=>Patient::all(),'accouchements'=>Accouchement::all()],['naissances'=>$naissances]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {

        return view('naissances.create',['patients'=>Patient::all(),'accouchements'=>Accouchement::all()]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $naissances=new NouveauNee();

        //dd($request->all());
        $naissances->accouchement_id=$request->accouchement_id;
        $naissances->patient_id=$request->patient_id;
        $naissances->Dat_naiss=$request->Dat_naiss;
        $naissances->poids=$request->poids;
        $naissances->sexe=$request->sexe;
        $naissances->observation=$request->observation;

        $naissances->save();
       // return redirect()->back();
        return redirect()->route("naissances.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Naissance  $naissance
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $naissances =NouveauNee::find($id);
        return view('naissances.show')->with('naissances' , $naissances);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Naissance  $naissance
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $naissances = NouveauNee::findOrFail($id);
        //$naissances=Naissance::find($id);
          return view('naissances.edit',['patients'=>Patient::all(),'accouchements'=>Accouchement::all()],['naissances'=>$naissances]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function update(Request $request,  $id)
    {
        $naissances=NouveauNee::FindOrFail($id);
        $naissances->Dat_naiss=request()->input("Dat_naiss");
        $naissances->poids=request()->input("poids");
        $naissances->sexe=request()->input("sexe");
        $naissances->observation=request()->input("observation");
              $naissances->update();

              //return view("naissances.index");
              return redirect()->route("naissances.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return RedirectResponse
     */
    public function destroy( $id)
    {
        $naissances=NouveauNee::find($id);
        $naissances->delete();

        return redirect()->route("naissances.index");
    }
}
