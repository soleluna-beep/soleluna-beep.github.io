<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TerritorioController extends Controller
{
    public function getTerritorio() {
            session_start();
    
            if(!isset($_SESSION['logged']) || $_SESSION['logged']==false){
                return view('territorio')->with(['logged'=>false, 'loggedRole' => null]);
               }
            else{
                return view('territorio')->with(['logged'=>true, 'loggedRole' => $_SESSION['loggedRole'], 'loggedNome' => $_SESSION['loggedNome']]); 
               }
    }
}

