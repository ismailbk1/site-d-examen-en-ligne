<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use PDO;
use App\questions;
use App\resultat;
use App\User;
use App\post;
use App\technologies;
use RealRashid\SweetAlert\Facades\Alert;




class visiteurcontrolleur extends Controller
{
    public function profilvisiteur(){

       // je travailler sur le score de chaque technologie
        $user=Auth::user();
        if(Auth::user()->role=='admin')
        return view('admin.dashbord');
        else{
        $test_resultat = DB::table('resultats')
   ->select(DB::raw(' round(((count(*) ) /20 )*100, 0.1) as nbvrai , technologies.name , technologies.id'))
        ->join('users', 'users.id', '=', 'resultats.user_id')
        ->join('questions', 'questions.id', '=', 'resultats.qst_id')
        ->join('technologies', 'technologies.id', '=', 'questions.technologie_id')
      ->where([ ['users.id', '=', $user->id],
      ['etat', '=','vrai'],
      
      ])
    ->groupBy('technologie_id')
    ->get();

 //   dd($test_resultat);



// fin de recherche de score 




//selectioner le technologier que deja passer 
$tech=technologies::all();


for ($i =0; $i < $tech->count(); $i++){
    $arraytechpasser[$tech[$i]->name]=0 ;} //array content les liste de technologies initialiser en valeur 0
 
//tous sa pour chercher les test qui deja passer par le condidateur
$qst_id = DB::table('resultats')
->select('qst_id')
->get();
for ($i =0; $i < $qst_id->count(); $i++){
    $arrayqst_id[]=$qst_id[$i]->qst_id ;}


$tech_id = DB::table('questions')
->select('technologie_id')
->whereIn('id' , $arrayqst_id)
->get();
for ($i =0; $i < $tech_id->count(); $i++){
    $arraytech_id[]=$tech_id[$i]->technologie_id ;}

$techpasser=DB::table('technologies')

->whereIn('id' , $arraytech_id )
->get();

for ($i =0; $i < $techpasser->count(); $i++){
    $arraytechpasser[$techpasser[$i]->name]=1 ;} // en change le valeur de technologie passer a 1 pour distinct

//fin de recherche de technologie passer  
          //dd($techpasser[0]->id);
//c'est equivalant a select * from technologies
// where id in(select technologie_id from questions 
//where id in (select qst_id from resultats ))

   
       return view('dashboardvisiteur')->with('us' , $user)->with('test_resultat' , $test_resultat);
    }
}
    //function de debut 
    public function debut(){
        $tech=technologies::all();
        $post=post::all();

        for ($i =0; $i < $tech->count(); $i++){
            $arraytechpasser[$tech[$i]->name]=0 ;} //array content les liste de technologies initialiser en valeur 0
         
        //tous sa pour chercher les test qui deja passer par le condidateur
        $qst_id = DB::table('resultats')
        ->select('qst_id')
        ->where('user_id',Auth::user()->id)
        ->get();
        
        if($qst_id->count()>0){
        for ($i =0; $i < $qst_id->count(); $i++){
            $arrayqst_id[]=$qst_id[$i]->qst_id ;}
        
        
        $tech_id = DB::table('questions')
        ->select('technologie_id')
        ->whereIn('id' , $arrayqst_id)
        ->get();
        for ($i =0; $i < $tech_id->count(); $i++){
            $arraytech_id[]=$tech_id[$i]->technologie_id ;}
        
        $techpasser=DB::table('technologies')
        ->whereIn('id' , $arraytech_id )
        ->get();
        
        for ($i =0; $i < $techpasser->count(); $i++){
            $arraytechpasser[$techpasser[$i]->name]=1 ;} // en change le valeur de technologie passer a 1 pour distinct
        
        //fin de recherche de technologie passer  
        }
            return view('debut')->with('tech' , $tech)->with('passer' , 0)->with('arraytechpasser' , $arraytechpasser)->with('post' , $post);
        
   
        
        }
 //function pour start qcm
    public function start($id){
 
                return view('start')->with('id' , $id);
                
    }
                
    public function editprofil(){


        return view('editprofil');
    }

    public function profil(){

        $vrai = User::find(Auth::user()->id)->resultat->where('etat', 'vrai')->count();
        $faux = User::find(Auth::user()->id)->resultat->where('etat', 'faux')->count();
        return view('profil')->with('vrai' , $vrai)->with('faux' , $faux);;
    }



      // function update produit 

  public function update(Request $reqt){
    $id=$reqt->id;
   
    $user=user::find($id);
    $user->name=$reqt->nom;
    $user->email=$reqt->email;
    $user->update();
    return redirect()->back();

    }
   

    
}