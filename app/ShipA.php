<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShipA extends Model
{
	public function attacks()
    {
        return $this->morphMany(Comment::class, 'attackable');
    }
    
}
