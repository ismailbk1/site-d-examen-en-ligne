<?php

namespace App\Http\Controllers;
use App\resultat;
use App\questions;
use App\User;
use App\post;
use App\technologies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDO;
class HomeController extends Controller 
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->role=='admin')
        return view('admin.dashbord');
        else    { 
            
// pour redirecte vers le page profil 
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
    return view('debut')->with('tech' , $tech)->with('passer' , 0)->with('arraytechpasser' , $arraytechpasser)->with('post' , $post);

}        

    }
 
}