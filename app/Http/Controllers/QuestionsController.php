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
class QuestionsController extends Controller
{
    //affichage de question dans la page admin
    public function question(){
        $qsts = DB::table('technologies')
        // ->select(DB::raw('count(*) as nbvrai , technologies.name'))
           
            ->join('questions', 'questions.technologie_id', '=', 'technologies.id')
        //->groupBy('technologie_id')
        ->get();
        
      
        $techs=technologies::all();
        return view('/admin.question')->with('qsts',$qsts)->with('techs',  $techs);
    }


    // fonction d'ajout de question
    public function store(Request $reqt){
        // $technologies=technologies::with("question")->first();
        // dd($technologies->question);
        $qst=new questions();
        
        $qst->qst=$reqt->question;
        $qst->technologie_id=$reqt->technologie;
        $qst->a=$reqt->a;
        $qst->b=$reqt->b;
        $qst->c=$reqt->c;
        $qst->d=$reqt->d;
        $qst->ans=$reqt->ans;
        $qst->technologie_id=$reqt->tech;
       if( $qst->save())
    return redirect()->back();
    }


    // fonction de modification de questioon
    public function update(Request $reqt){
    
   
    $id=$reqt->id;
    $qst=questions::find($id);

    $qst->qst=$reqt->question;
    $qst->a=$reqt->a;
    $qst->b=$reqt->b;
    $qst->c=$reqt->c;
    $qst->d=$reqt->d;
    $qst->ans=$reqt->ans;

    if($qst->update())
    return redirect()->back();
    
    
    }
// fonction pour supprimer un question
    public function destory($id){
        $qst=questions::find($id);


        if(  $qst->delete() ){
            return redirect()->back();
          }
          else{
            echo'Error';
          }

        
    }

    // function de debut de qcm
    public function first($id){
 
      
$correctans=0;
$wrongans=0;
// pour redirecte vers le page profil 
$user=resultat::where('user_id',Auth::user()->id)->get();
$qst=questions::where('technologie_id' , $id)->get();
Session::put('next' , '1');
Session::put('wrongans' , '0');
Session::put('correctans' , '0');
$q=questions::where('technologie_id' , $id)->get()->first();
      //  dd($q);
        return view('first')->with('q' ,$q)->with('correctans' , $correctans)->with('wrongans' , $wrongans)->with('id' , $id);
    }

// function de next en qcm

 public function submitans(Request $reqt){
    $user=resultat::where('user_id',Auth::user()->id)->get();
$qst=questions::all();
$tech=technologies::all();


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
    $post=post::all();
 //dd($reqt->id);
$id=$reqt->id ;
$user=resultat::where('user_id',Auth::user()->id)->get();
$qst=questions::where('technologie_id' , $id)->get();

$rsl=new resultat();
$next=Session::get('next');
$wrongans=Session::get('wrongans');
$correctans=Session::get('correctans');
 $reqt->validate([
 'ans'=>'required',
 'ansdb'=>'required',
]);
//  dd(Session::get('correctans'));
        $next+=1;
    
    if($reqt->ansdb == $reqt->ans)
    {
        $rsl->etat="vrai";
        $rsl->reponse=$reqt->ans;
        $rsl->qst_id=$reqt->id_qst;
        $rsl->user_id=Auth::user()->id;
        $rsl->save();
    $correctans=Session::get('correctans')+1;
    
    }
    if($reqt->ansdb != $reqt->ans){
        
        $rsl->etat="faux";
        $rsl->reponse=$reqt->ans;
        $rsl->qst_id=$reqt->id_qst;
        $rsl->user_id=Auth::user()->id;
        $rsl->save();
        $wrongans=Session::get('wrongans')+1 ;
    }
    Session::put('next' ,$next);
Session::put('wrongans',$wrongans);
Session::put('correctans',$correctans);
$j=0;
$qsts=questions::where('technologie_id' , $id)->get();
foreach($qsts as $q){
$j++;
if($qsts->count() < $next){
    $vrai = User::find(Auth::user()->id)->resultat->where('etat', 'vrai')->count();
    $faux = User::find(Auth::user()->id)->resultat->where('etat', 'faux')->count();
    $techs=technologies::all();
    return view('debut')->with('correctans' , $correctans)->with('wrongans' , $wrongans)->with('vrai' , $vrai)->with('faux' , $faux)->with('tech', $techs  )->with('post' , $post)->with('arraytechpasser' , $arraytechpasser);
}
if($j==$next){

    return view('first')->with('q' ,$q)->with('correctans' , $correctans)->with('wrongans' , $wrongans)->with('id' , $id)->with('arraytechpasser' , $arraytechpasser);
}

    
}
   }




   //page resultat
   public function correction($id)
   {
    //je travailler sur le score de chaque technologie
    $user=Auth::user();
    $test_correction = DB::table('resultats')
// ->select(DB::raw('count(*) as nbvrai , technologies.name'))
    ->join('users', 'users.id', '=', 'resultats.user_id')
    ->join('questions', 'questions.id', '=', 'resultats.qst_id')
    ->join('technologies', 'technologies.id', '=', 'questions.technologie_id')
  ->where([ ['users.id', '=', $user->id],
  ['technologies.id', '=', $id],
  
  ])
//->groupBy('technologie_id')
->get();

//dd($test_resultat);
    $vrai = User::find(Auth::user()->id)->resultat->where('etat', 'vrai')->count();
    $faux = User::find(Auth::user()->id)->resultat->where('etat', 'faux')->count();
  
   
    $reponse = User::find(Auth::user()->id)->resultat;
$qst = questions::all();





    return view('correction')->with('rs' , $reponse)->with('qst' , $qst)->with('test_correction' , $test_correction);
    
}


//function de retour de listes des visiteur avec leur score dans le dashbord admin
public function visiteur(){
     //je travailler sur le score de chaque technologie
     $user=Auth::user();
     $userpasseexment = DB::table('resultats')
 ->select(DB::raw(' round(((count(*) ) /20 )*100, 0.1) as nbvrai , users.name ,users.email ,users.id ,technologies.name as tech '  ))
     ->join('users', 'users.id', '=', 'resultats.user_id')
     ->join('questions', 'questions.id', '=', 'resultats.qst_id')
     ->join('technologies', 'technologies.id', '=', 'questions.technologie_id')
 ->groupBy('user_id' , 'technologies.id')
 ->get();
 
    $user_vrai = DB::table('resultats')
                 ->select('user_id', DB::raw('count(*) as total'))
                 ->where('etat' ,'vrai')
                 ->groupBy('user_id')
                 ->get();

 $user_faux = DB::table('resultats')
                 ->select('user_id', DB::raw('count(*) as total'))
                 ->where('etat' ,'faux')
                 ->groupBy('user_id')
                 ->get();
               $user=user::where('role' , '!=' ,'admin'  )->get();
               foreach ($user_faux as $i=>$value) 
                   $arrayidf[] = $value->user_id;
                foreach ($user_faux as  $i=>$value) 
                   $arraytotalf[] = $value->total;
                   foreach ($user_vrai as  $i=>$value) 
                   $arrayidv[] = $value->user_id;
                foreach ($user_vrai as $i=> $value) 
                   $arraytotalv[] = $value->total;
     


            
   return view('/admin.visiteur')->with('user' , $user)->with('arrayidf' , $arrayidf)->with('arraytotalf' , $arraytotalf)->with('arrayidv' , $arrayidv)->with('arraytotalv' , $arraytotalv)->with('userpasseexment' ,$userpasseexment);
}


public function destoryuser($id){
    $u=user::find($id);


    if(  $u->delete() ){
        return redirect()->back();
      }
      else{
        echo'Error';
      }

    
}

}