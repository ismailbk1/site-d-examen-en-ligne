<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use PDO;
use App\questions;
use App\resultat;
use App\technologies;
use App\User;
use App\post;
class PostController extends Controller
{
    //function qui retour liste des posts

    public function post(){
$post=post::all();
return view('/admin.post')->with('post' ,$post);

    }
    //      fonction d'ajout de post
    public function store(Request $reqt){

        $post=new post();
        
        $post->name=$reqt->name;
        $post->description=$reqt->description;
        $post->nbr_place=$reqt->nbr_place;
       if( $post->save())
    return redirect()->back();
    }


//     // fonction de modification de posts
    public function update(Request $reqt){
    
// dd($reqt->nbr_place);
    $id=$reqt->id;
    $post=post::find($id);
    $post->name=$reqt->name;
    $post->nbr_place=$reqt->nbr_place;
    $post->description=$reqt->description;
    if($post->update())
    return redirect()->back();
    
    
    }
// // fonction pour supprimer un post
public function destory($id){
  
    $post=post::find($id);


    if(  $post->delete() ){
        return redirect()->back();
      }
      else{
        echo'Error';
      }

    
}
// functionpor changer la disponibilite de post
public function dispo($id){
  //  dd($id);
    $post=post::find($id);
    if($post->dispo=='oui')
   { $post->dispo='non';
    $post->update();
    return redirect()->back();
   }
    else{
        $post->dispo='oui';
        $post->update();
        return redirect()->back();
    }
  
  
   
}
}
