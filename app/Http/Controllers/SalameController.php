<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalameController extends Controller
{
    public function getSalame() {

        session_start();
    
            if(!isset($_SESSION['logged']) || $_SESSION['logged']==false){
                return view('prodotti.salame')->with(['logged'=>false, 'loggedRole' => null]);
               }
            else{
                return view('prodotti.salame')->with(['logged'=>true, 'loggedNome' => $_SESSION['loggedNome'], 'loggedRole' => $_SESSION['loggedRole']]); 
               }
}

}