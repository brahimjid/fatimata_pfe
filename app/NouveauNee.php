<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NouveauNee extends Model
{  
  
    public function patient(){
        return $this->blongsTo('App\Patient');
    }
    public function accouchement(){
        return $this->blongsTo('App\Accouchement');
    }
}
