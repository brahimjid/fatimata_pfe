<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accouchement extends Model
{
    
   protected  $guarded=[];

   public function hopital()
   {
       return $this->belongsTo(App\Hopital::class);
   }

   public function patient()
   {
       return $this->belongsTo(App\Patient::class);
   }
   public function nouveauNees(){
    return $this->hasMany('App\NouveauNee');
}
}
