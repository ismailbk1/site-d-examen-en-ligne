<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cv extends Model
{
    //
    public function users(){
        return $this->belongosTo(users::class , 'user_id' , 'id' );
    }
}