<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attack extends Model
{

    public function attackable()
     {
        return $this->morphTo();
    
     }

}
