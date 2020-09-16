<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = [];
    public function nouveauNees(){
        return $this->hasMany('App\NouveauNee');
    }
    public function accouchement(){
        return $this->hasOne('App\Accouchement');
    }

    public function hopitals()
    {
        return $this->belongsTo(Hopital::class);

     }
}
