<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class technologies extends Model
{
    //
    public function question()
{
    return $this->hasMany(questions::class , 'technologie_id' , 'id' );

}
}