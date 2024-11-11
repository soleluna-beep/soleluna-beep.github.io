<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnimaliController extends Controller
{
    public function getAnimali() {
 
        session_start();

        if(!isset($_SESSION['logged']) || $_SESSION['logged']==false){
            return view('animali')->with(['logged'=>false, 'loggedRole' => null]);
           }
        else{
            return view('animali')->with(['logged'=>true, 'loggedNome' => $_SESSION['loggedNome'], 'loggedRole' => $_SESSION['loggedRole']]); 
           }
    }

}
