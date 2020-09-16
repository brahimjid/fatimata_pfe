<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Patient;
use App\NouveauNee;
class StatisticsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
            $patients = Patient::select('created_at')
            
            ->get()
            ->groupBy(function($date) {
                return Carbon::parse($date->created_at)->format('m'); // grouping by months
            });
        $usermcount = [];
        $data = [];
        $nouveau_nees = NouveauNee::select('created_at');

   
        foreach ($patients as $key => $value) {
            $usermcount[(int)$key] = count($value);
        }
        foreach ($nouveau_nees as $key => $value) {
            $usermcount[(int)$key] = count($value);
        }
        for($i = 1; $i <= 12; $i++){
            if(!empty($usermcount[$i])){
                $data[$i] = $usermcount[$i];
            }else{
                $data[$i] = 0;
            }
        }



            if (request()->ajax())
                return response()->json($data);



        return view('statistics',['data'=>$data]);
      //  return view('pages.dashboard');
    }
   /* public function __invoke(request $request)
    {
        return view('pages.dashboard');
    }*/
}
