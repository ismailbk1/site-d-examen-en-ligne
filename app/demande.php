<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class demande extends Model
{
    //
    public function users(){
        return $this->belongosTo(users::class , 'user_id' , 'id' );
    }
    public function post(){
        return $this->belongosTo(posts::class , 'post_id' , 'id' );
    }
}
