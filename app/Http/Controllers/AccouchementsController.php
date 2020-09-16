<?php

namespace App\Http\Controllers;

use App\Accouchement;
use App\Hopital;
use App\Patient;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AccouchementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::denies('medecin')){
            return redirect()->route('home');}
        $accouchements=Accouchement::paginate(3);
        return view('accouchements.index',['patients'=>Patient::all(),'hopitals'=>Hopital::all()],['accouchements'=>$accouchements]);
     }
     
    public function search(Request $request)
    {
        $search=$request->get('search');
        $accouchements=DB::table('accouchements')->where('id','like','%'.$search.'%')->paginate(3);
        return view('accouchements.index',['patients'=>Patient::all(),'hopitals'=>Hopital::all()],['accouchements'=>$accouchements]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
   
        return view('accouchements.create',['patients'=>Patient::all(),'hopitals'=>Hopital::all()]);
     //   return view('accouchements.create',['hopitals'=> Hopital::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $accouchements=new Accouchement();
        
        //dd($request->all());
        $accouchements->patient_id=$request->patient_id;
        $accouchements->hopital_id=$request->hopital_id;
        $accouchements->Dat_accouch=$request->Dat_accouch;
        $accouchements->Dat_accouch=$request->Dat_accouch;
        $accouchements->etat_nn=$request->etat_nn;
        $accouchements->etat_pat=$request->etat_pat;
        $accouchements->type=$request->type;
        
        
        $accouchements->save();
       // return redirect()->back();
        return redirect()->route("accouchements.index");
    }
    


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $accouchements =Accouchement::find($id);
        return view('accouchements.show',['hopitals'=>Hopital::all()])->with('accouchements' , $accouchements);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $accouchements = Accouchement::find($id);

        return view('accouchements.edit',['patients'=>Patient::all(),'hopitals'=>Hopital::all()],['accouchements'=>$accouchements]);
    } 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $accouchements=Accouchement::FindOrFail($id);
     
              $accouchements->update(
                [
                    'Dat_accouch' => $request->Dat_accouch,
                    'etat_nn' => $request->etat_nn,
                    'etat_pat' => $request->etat_pat,
                    'type' => $request->type,
            ]);
            return redirect()->route('accouchements.index');
    
        } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $accouchements=Accouchement::find($id);
        $accouchements->delete();
      
        return redirect()->route("accouchements.index");
    }
}
