<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wilaya extends Model
{
    protected $fillable=['nom_wilaya'];
    public function departements()
    {
        return $this->hasMany(Departement::class);
    }
}
