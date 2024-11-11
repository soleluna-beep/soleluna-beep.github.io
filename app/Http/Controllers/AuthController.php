<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\DataLayer;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{

    public function index()
    {
        $dl = new DataLayer();
        $users = $dl->listaUtenti();
        session_start();

        if(!isset($_SESSION['logged']) || $_SESSION['logged']==false){
            return view('utente.clienti')->with(["lista_utenti" => $users, 'logged'=>false, 'loggedRole' => null]);
           }
        else{
            return view('utente.clienti')->with(["lista_utenti" => $users, 'logged'=>true, 'loggedNome' => $_SESSION['loggedNome'], 'loggedRole' => $_SESSION['loggedRole']]); 
           }
    }


    public function authentication() {
        return view('utente.login');
    }

    public function profile() {
        session_start();
        $dl = new DataLayer(); // DataLayer gestisce tutte le query del database

        $user=$dl->getUser(auth()->user()->id);
        return view('utente.profilo')->with('logged',true)->with('loggedNome', $_SESSION['loggedNome'])->with('user', $user);
    }

    public function editProfile($id) {
        session_start();
        $dl = new DataLayer();
        $user = $dl->getUser($id);

        return view('utente.modificaprofilo')->with('logged', true)->with('loggedName', 
        $_SESSION["loggedName"])->with('user',$user);
    }

    public function updateProfile(Request $request, $id) {
        session_start();
        $user = User::find($id);
        $user->nome = $request->input('nome');
        $user->cognome = $request->input('cognome');
        $user->email = $request->input('email');
        $user->cellulare = $request->input('cellulare');
        $user->indirizzo = $request->input('indirizzo');
        $user->citta = $request->input('citta');
        $user->cap = $request->input('cap');
        $user->provincia = $request->input('provincia');
        $user->save();

        //$dl = new DataLayer();
        //$dl->editUser($id, $request->input('nome'), $request->input('cognome'), $request->input('email'),
        //$request->input('cellulare'), $request->input('indirizzo'), $request->input('citta'),
        //$request->input('cap'), $request->input('provincia'));
        Redirect::to(route('utente.profile'));
        return view('utente.modifica');
    }

    public function editPassword($id) {
        session_start();
        $dl = new DataLayer();
        $user = $dl->getUser($id);

        return view('utente.modificapassword')->with('logged', true)->with('loggedName', 
        $_SESSION["loggedName"])->with('user',$user);
    }

    public function updatePassword(Request $request, $id) {

        session_start(); 
        $dl = new DataLayer();
        $dl->editPassword($id, $request->input('password'));
        Redirect::to(route('utente.profile'));
        return view('utente.modificapass');
    }


    public function logoutRequest() {
        return view('utente.logout');
    }

    public function logout() {
        session_start();
        session_destroy();
        return Redirect::to(route('chisiamo'));
    }

    public function login(Request $req) {
        session_start();
        $dl = new DataLayer();

        if(Auth::attempt(['email' => $req->input('email'), 'password' => $req->input('password')])) 
        {
            $user_name = $dl->getUserName($req->input('email'));
            $_SESSION['logged'] = true;
            $_SESSION['loggedName'] = $user_name;
            $_SESSION['loggedRole'] = $dl->getUser(auth()->user()->id)->role;
            $_SESSION['loggedNome'] = $dl->getUser(auth()->user()->id)->nome;
            return Redirect::to(route('chisiamo'));

        }
        return view('utente.utentePaginaErrore');
    }

    public function create()    
    {
        return view('utente.registrazione');
    }

    public function registration(Request $req) {

        $dl = new DataLayer();
        $role='cliente';
        $dl->addUser($req->input('nome'), $req->input('cognome'), $req->input('email'), 
        $req->input('cellulare'), $req->input('indirizzo'), $req->input('citta'), 
        $req->input('cap'), $req->input('provincia'),$req->input('password'), $role);

        return Redirect::to(route('utente.authentication'));
    }

    public function ordinipersonali(){
        
        session_start();

        $dl = new DataLayer(); // DataLayer gestisce tutte le query del database

        $user=$dl->getUser(auth()->user()->id)->id;

        $ordini=array(); // Creo un array, in cui salverò gli alloggi
        $ordini=$dl->getOrdinifromUser($user);

        return view('ordini.ordinipersonali')->with(["ordini_personali" => $ordini, 'logged'=>true, 
            'loggedNome' => $_SESSION['loggedNome'], 'loggedRole' => $_SESSION['loggedRole']]); 
    }

    public function ajaxRegistrazione(Request $request){
        
        $dl = new Datalayer();

        if($dl->findUserByEmail($request->input('email')))
        {
            $response = array('found'=>true);
        } else {
            $response = array('found'=>false);
        }
        return response()->json($response);

    }
}