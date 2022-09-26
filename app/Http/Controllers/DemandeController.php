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
use App\demande;
class DemandeController extends Controller
{
    //
    public function postuler(Request $reqt){
//dd($reqt->id);
$d=demande::all();

$user_id=Auth::user()->id;

if($d->count()>0){
  
   for ($i =0; $i < $d->count(); $i++){
  
    if($user_id==$d[$i]->user_id && $d[$i]->post_id==$reqt->id  ){
        return view('404');
        break;
    }
   
  
}
}
$user_id=Auth::user()->id;
        $destination='uploads';
$cv=$reqt->file('cv');
$newname=uniqid();
$newname .="." .$cv->getClientOriginalExtension(); //donner un niveau nom a l'cv
$cv->move($destination ,$newname);  // badel il image vers dossier uplode dans le dossier public
$dem=new demande() ;
$dem->file=$newname;
$dem->user_id=$user_id;
$dem->post_id=$reqt->id;
$dem->save();
return redirect()->back();
    }



    // liste de demandes pour dashboard admin
    public function demandes(){
        $d = DB::table('demandes')
         ->select(DB::raw('users.name as condidat, users.email,demandes.file ,demandes.id,posts.name as post_name,demandes.created_at'))
            ->join('users', 'users.id', '=', 'demandes.user_id')
            ->join('posts', 'posts.id', '=', 'demandes.post_id')
    
        //->groupBy('technologie_id')
        ->get();
      //  dd($d);
      return view('/admin.demandes')->with('demandes' , $d);
    }
}
