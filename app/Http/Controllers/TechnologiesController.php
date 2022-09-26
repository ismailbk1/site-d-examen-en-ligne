<?php

namespace App\Http\Controllers;
use App\technologies;
use Illuminate\Http\Request;

class TechnologiesController extends Controller
{
    //
    public function technologie(){
        $techs=technologies::all();
        return view('/admin.technologies')->with('techs',$techs);
    }


//      fonction d'ajout de technologie
    public function store(Request $reqt){

        $tech=new technologies();
        
        $tech->name=$reqt->name;
        $tech->description=$reqt->description;
        $tech->temp=$reqt->temp;
       if( $tech->save())
    return redirect()->back();
    }


//     // fonction de modification de technologies
    public function update(Request $reqt){
    

    $id=$reqt->id;
    $tech=technologies::find($id);
    $tech->name=$reqt->name;
    $tech->temp=$reqt->temp;
    $tech->description=$reqt->description;
    if($tech->update())
    return redirect()->back();
    
    
    }
// // fonction pour supprimer un question
    public function destory($id){
        $tech=technologies::find($id);


        if(  $tech->delete() ){
            return redirect()->back();
          }
          else{
            echo'Error';
          }

        
    }

}