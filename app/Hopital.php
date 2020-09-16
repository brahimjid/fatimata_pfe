<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hopital extends Model
{
   protected $guarded=[];
   protected $fillable=['nom','departement_id'];

    public function accouchements()
    {
        return $this->hasMany(Accouchement::class);
    }
     public function departement()
     {
         return $this->belongsTo(Departement::class);
     }

    public function patients()
    {
        return $this->hasMany(Patient::class);


    }
}
