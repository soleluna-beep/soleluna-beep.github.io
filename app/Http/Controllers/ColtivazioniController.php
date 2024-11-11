<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ColtivazioniController extends Controller
{
    public function getColtivazioni() {
        session_start();

        if(!isset($_SESSION['logged']) || $_SESSION['logged']==false){
            return view('coltivazioni')->with(['logged'=>false, 'loggedRole' => null]);
           }
        else{
            return view('coltivazioni')->with(['logged'=>true, 'loggedNome' => $_SESSION['loggedNome'], 'loggedRole' => $_SESSION['loggedRole']]); 
           }
    }
}
