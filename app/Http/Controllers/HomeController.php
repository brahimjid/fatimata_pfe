<?php

namespace App\Http\Controllers;
use App\Departement;
use App\Wilaya;
use Carbon\Carbon;
use App\Patient;
use App\NouveauNee;
use App\Accouchement;
class HomeController extends Controller
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {

      
        $nbrecesariat = Accouchement::where('type','cesariat')->get() ->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('m'); // grouping by months
        });;
        $cesCount = [];
        $dataCesariat = [];

        foreach ($nbrecesariat as $key => $value) {
            $cesCount[(int)$key] = count($value);
        }

        for($i = 1; $i <= 12; $i++){
            if(!empty($cesCount[$i])){
                $dataCesariat[$i] = $cesCount[$i];
            }else{
                $dataCesariat[$i] = 0;
            }
        }


        $patients = Patient::select('created_at')
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


                $nouveauNee = NouveauNee::select('created_at')
                ->get()
                ->groupBy(function($date) {
                    return Carbon::parse($date->created_at)->format('m'); // grouping by months
                });
            $nouveauNeeCount = [];
            $data1 = [];

            foreach ($nouveauNee as $key => $value) {
                $nouveauNeeCount[(int)$key] = count($value);
            }

            for($i = 1; $i <= 12; $i++){
                if(!empty($nouveauNeeCount[$i])){
                    $data1[$i] = $nouveauNeeCount[$i];
                }else{
                    $data1[$i] = 0;
                }
            }
            $pat = Patient::select('created_at')
            ->get()
            ->groupBy(function($date) {
                return Carbon::parse($date->created_at)->format('m'); // grouping by months
            });
        $patCount = [];
        $data4 = [];

        foreach ($pat as $key => $value) {
            $patCount[(int)$key] = count($value);
        }

        for($i = 1; $i <= 12; $i++){
            if(!empty($patCount[$i])){
                $data4[$i] = $patCount[$i];
            }else{
                $data4[$i] = 0;
            }
        }
            //  2
            $Accouchement = Accouchement::select('created_at')
                ->get()
                ->groupBy(function($date) {
                    return Carbon::parse($date->created_at)->format('m'); // grouping by months
                });
            $nouveauAccouchementCount = [];
            $data2 = [];

            foreach ($Accouchement as $key => $value) {
                $AccouchementCount[(int)$key] = count($value);
            }

            for($i = 1; $i <= 12; $i++){
                if(!empty($AccouchementCount[$i])){
                    $data2[$i] = $AccouchementCount[$i];
                }else{
                    $data2[$i] = 0;
                }
            }



                if (request()->ajax())
                    return response()->json([
                        'data4'=>$data4,
                        'data3'=>$data3,
                        'data1'=>$data1,
                        'data2'=>$data2,
                         'dataCesariat'=>$dataCesariat
                    ]);

                    return view('pages.dashboard',['willaya'=>Wilaya::paginate(4)]);
      //  return view('pages.dashboard');
    }
   /* public function __invoke(request $request)
    {
        return view('pages.dashboard');
    }*/
}
