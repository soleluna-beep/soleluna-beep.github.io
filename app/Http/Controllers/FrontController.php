<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function getIndex() {
        session_start();

        if(!isset($_SESSION['logged']) || $_SESSION['logged']==false){
            return view('chisiamo')->with(['logged'=>false]);
           }
        else{
            return view('chisiamo')->with(['logged'=>true, 'loggedNome' => $_SESSION['loggedNome'], 'loggedName' => $_SESSION['loggedRole']]); 
           }
    }
}
