<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function getMothlyPatient(){

    }
    public function getAllMoth()
    {
        $moiTabs=array();
        $mois=Patient::orderBy('created_at','ASC')->pluck('created_at');
        $mn=json_decode($mois);

        if (! empty($mn)){
            foreach ($mn as $ks){
                $date= new \DateTime($ks);
                $moINoms= $date->format( 'M');
                $moINums= $date->format( 'm');

               $moiTabs[$moINums]=$moINoms;
            }
            return $moiTabs;

        }
    }

       public function getMwCont($month)
       {
           $somw= Patient::whereMonth('created_at',$month)->get()->count();
           return $somw;
       }
      public function getDonMOI()
      {
          $patientCout=array();
          $patientNom=array();
          $moiTabs=$this->getAllMoth();
         if (! empty($moiTabs)){
             foreach ($moiTabs as $moINums=>$moINoms){
                $somw= $this->getMwCont($moINums );
                array_push($patientNom,$moINoms);
                array_push($patientCout,$somw);
             }
         }
         $max_no=max($patientCout);
         $max=round(($max_no+10/2)/10)*10;
         $moiTabs=$this->getAllMoth();
          $patientDonnes= array('mois'=>$patientNom,'nom_brePatient'=>$patientCout,'max'=>$max);
          return $patientDonnes;
          //dd($patientDonnes);
      }
}
