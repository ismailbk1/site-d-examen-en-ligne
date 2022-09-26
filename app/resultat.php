<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resultat extends Model
{
    //
    public function users(){
        return $this->belongosTo(users::class , 'user_id' , 'id' );
    }
    public function question(){
        return $this->belongsTo(questions::class ,'qst_id' , 'id');
    } 
}