<?php

namespace App\Http\Controllers;

use App\Hopital;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use phpDocumentor\Reflection\DocBlock\Tags\Version;

class PatientsController extends Controller
{
     public function __construct()
     {
         $this->middleware('auth');
     }

    /**
     * Display a listing of the resource.
     *
     * @param Patient $patient
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

//        if(Gate::denies('medecin')){
//            return redirect()->route('home');
//        }
        if (!empty(Auth::user()->wilaya_id)){

               $patients = DB::select('select p.id ,p.nom ,p.prenom ,p.poids,p.telephone from
                             patients p ,
                             hopitals h,
                             departements d,
                             users s,
                             wilayas w
                             where s.wilaya_id = w.id and w.id=3
                             and d.wilaya_id= w.id and h.departement_id = d.id
                             and p.hopital_id = h.id

                             ');
//              foreach ($patients as $patient){
//                  dd($patient->depnom);
//              }
            return view('patients.index',['patients'=>$patients]);

        }
        $id = auth()->user()->hopital_id;
        DB::select("select p.nom,p.prenom,p.telephone,p.poids from patients p, hopitals h,users s where
                                p.hopital_id = h.id and s.hopital_id = $id");
        $patients=Patient::where('hopital_id',auth()->user()->hopital_id)->paginate(3);
        return view('patients.index',['patients'=>$patients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }

    public function search(Request $request)
    {
        $search=$request->get('search');
        $patients=DB::table('patients')->where('nom','like','%'.$search.'%')->paginate(3);
      // dd($patients);
       return view('patients.index',['patients'=>$patients]);
      // return redirect()->route('patients.index');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        Patient::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'age' => $request->age,
            'telephone' => $request->telephone,
            'nom_mari' => $request->nom_mari,
            'observation' => $request->observation,
            'duree_gross' => $request->duree_gross,
            'poids' => $request->poids,

        ]);


        return redirect()->route('patients.index')->with(['status' => 'Patient Ajouter']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $patient =Patient::find($id);
        return view('patients.show')->with('patient' , $patient);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $patient = Patient::find($id);

        return view('patients.edit')->with('patient' , $patient);
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
        $patient = Patient::find($id);
        $patient->update(['nom' => $request->nom,
            'prenom' => $request->prenom,
            'age' => $request->age,
            'telephone' => $request->telephone,
            'nom_mari' => $request->nom_mari,
            'observation' => $request->observation,
            'duree_gross' => $request->duree_gross,
            'poids' => $request->poids,
        ]);
        return redirect()->route('patients.index')->with(['status' => 'Patient Ajouter']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);

        $patient->delete();

       return redirect()->route('patients.index')->with(['status' => 'Supprimer Avec']);
    }
}
