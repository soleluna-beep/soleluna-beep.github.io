<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChisiamoController extends Controller
{
    public function getHome() {
        session_start();

        if(!isset($_SESSION['logged']) || $_SESSION['logged']==false){
            return view('chisiamo')->with(['logged'=>false, 'loggedRole' => null]);
           }
        else{
            return view('chisiamo')->with(['logged'=>true, 'loggedName' => $_SESSION['loggedName'], 'loggedNome' => $_SESSION['loggedNome'], 'loggedRole' => $_SESSION['loggedRole']]); 
           }

    }

}
