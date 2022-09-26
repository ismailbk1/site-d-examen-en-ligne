<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    
    public function demande(){
        return $this->hasOne(demande::class , 'user_id' , 'id' );
    }
}
