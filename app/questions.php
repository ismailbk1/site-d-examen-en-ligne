<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class questions extends Model
{
    //
   public function technologie(){
    return $this->belongosTo(technologies::class , 'technologie_id' , 'id' );

}
    public function resultat(){
        return $this->hasMany(resultat::class ,'qst_id' , 'id');
    } 
}