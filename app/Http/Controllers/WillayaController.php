<?php

namespace App\Http\Controllers;

use App\Departement;
use App\Patient;
use App\Wilaya;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WillayaController extends Controller
{
    public function index()
    {

    }
    public function show($id)
    {
//          $pts = DB::select("SELECT p.nom from patients p,hopitals h,departements d,wilayas w WHERE
//                 p.hopital_id = h.id and d.id=h.departement_id and d.wilaya_id= w.id and w.id=$id");
              $py = Wilaya::with(['departements.hopitals.patients'])->where('id',2)->get();
                // dd((count($py)));

        $patients = Patient::select('created_at')
            ->where('hopital_id',$id)
            ->get()
            ->groupBy(function($date) {
                return Carbon::parse($date->created_at)->format('m'); // grouping by months
            });
        $usermcount = [];
        $data3 = [];

        foreach ($patients as $key => $value) {
            $usermcount[(int)$key] = count($value);
        }

        for($i = 1; $i <= 12; $i++){
            if(!empty($usermcount[$i])){
                $data3[$i] = $usermcount[$i];
            }else{
                $data3[$i] = 0;
            }
        }
       // dd($data3);
        $departements =Departement::where('wilaya_id',$id)->get();
        return view('wilaya.wilayaSt',compact('departements'));
    }
}
