<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use PDO;
use App\questions;
use App\resultat;
use App\User;
class admin extends Controller
{
    //
    public function editprofil(){


        return view('admin.editprofil');
    }

    public function update(Request $reqt){
        Auth::user()->name=$reqt->nom;
        Auth::user()->email=$reqt->email;
        
        if($reqt->password){
            Auth::user()->password=Hash::make($reqt->password);
        
        }
               if(Auth::user()->update()){
                return redirect()->back()->with('message', 'Profil modifier avec success ');
               }
                

            }
}