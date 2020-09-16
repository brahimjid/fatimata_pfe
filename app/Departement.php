<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    protected $fillable=['nom','wilaya_id'];
   public function wilaya()
   {
       return $this->belongsTo(Wilaya::class);

   }
   public function hopitals()
   {
      return $this->hasMany(Hopital::class);
   }
}
