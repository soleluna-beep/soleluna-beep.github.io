<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class DataLayer
{
    public function listaProdotti() {        
        $prodotti = Prodotto::orderBy('prezzo','desc')->get();
        return $prodotti;
    }

    public function listaOrdini() {        
        $ordini = Ordine::orderBy('user_id','asc')->get();
        return $ordini;
    }

    public function listaUtenti() {        
        $users = User::orderBy('cognome','asc')->get();
        return $users;
    }


    public function listaOrdiniPersonali($user) {        
        $ordini = Ordine::where('user_id',$user)->orderBy('user_id','asc')->get();
        return $ordini;
    }


    public function listaRecensioni() {        
        $recensioni = Recensione::orderBy('autore', 'asc')->get();
        return $recensioni;
    }

    public function findProdottoById($id) {
        return Prodotto::where('id', $id)->first();
    }

    public function findOrdineById($id) {
        return Ordine::where('id', $id)->first();
    }

    public function findRoleByUsername($username) {
        $user=User::where('email', $username)->get(['role']);
        return $user[0]->role;
    }

    public function findOrdineByUser($user_id) {
        $ordine=User::where('id', $user_id)->get(['id']);
        return $ordine->first();
    }

    public function getOrdinifromUser($user) {
        $ordini_personali=Ordine::where('user_id', $user)->get();
        return $ordini_personali;
    }

    public function getUser($id){
        return User::where('id', $id)->first();
    }

    public function getUserID($email) {
        $users = User::where('email',$email)->get();
        return $users[0]->id;
    }

    public function getUserName($email) {
        $users = User::where('email',$email)->get();
        return $users[0]->name;
    }

    public function validUser($username, $password) {
        $users = User::where('email',$username)->get(['password']);
        
        if(count($users) == 0)
        {
            return false;
        }
        
        return (md5($password) == ($users[0]->password));
    }

    public function addUser($nome, $cognome, $email, $cellulare, $indirizzo, 
    $citta, $cap, $provincia, $password) {
        $user = new User();
        $user->nome = $nome;
        $user->cognome = $cognome;
        $user->email = $email;
        $user->cellulare = $cellulare;
        $user->indirizzo = $indirizzo;
        $user->citta = $citta;
        $user->cap = $cap;
        $user->provincia = $provincia;
        $user->password = password_hash($password, PASSWORD_ARGON2ID);
        $user->role='cliente';
        $user->save();
        return $user;
    }

    public function editUser($id, $nome, $cognome, $email, $cellulare, $indirizzo, $citta, $cap, $provincia) {
        $user = User::find($id);
        $user->nome = $nome;
        $user->cognome = $cognome;
        $user->email = $email;
        $user->cellulare = $cellulare;
        $user->indirizzo = $indirizzo;
        $user->citta = $citta;
        $user->cap = $cap;
        $user->provincia = $provincia;
        $user->save();
    }

    public function editPassword($id, $password) {
        $user = User::find($id);
        $user->password = password_hash($password, PASSWORD_ARGON2ID);
        $user->save();
    }

    public function editProdotto($id, $stato, $prezzo) {
        $prodotto = User::find($id);
        $user->stato = $stato;
        $user->prezzo = $prezzo;
        $user->save();
    }


    public function aggiungiProdotto($image_name, $nome, $stato, $prezzo) {
        $prodotto = new Prodotto;
        $prodotto->immagine = asset("storage/images/$image_name");
        $prodotto->nome = $nome;
        $prodotto->stato = $stato;
        $prodotto->prezzo = $prezzo;
        $prodotto->save();
    }

    public function eliminaProdotto($id) {
        $prodotto = Prodotto::find($id);
        $prodotto->delete();
    }


    public function aggiungiRecensione($autore, $stelle, $testo) {
        $recensione = new Recensione;
        $recensione->autore=$autore; 
        $recensione->stelle=$stelle; 
        $recensione->testo=$testo; 
        $recensione->save();
    }

    public function aggiungiOrdine($prodotto_uno, $quantita_uno, $prodotto_due, $quantita_due,
    $prodotto_tre, $quantita_tre, $prodotto_quattro, $quantita_quattro, $prodotto_cinque,
    $quantita_cinque, $prodotto_sei, $quantita_sei, $descrizione, $user_id) {
        $ordine = new Ordine;
        $ordine->prodotto_uno=$prodotto_uno;
        $ordine->quantita_uno=$quantita_uno;
        $ordine->prodotto_due=$prodotto_due;
        $ordine->quantita_due=$quantita_due;
        $ordine->prodotto_tre=$prodotto_tre;
        $ordine->quantita_tre=$quantita_tre;
        $ordine->prodotto_quattro=$prodotto_quattro;
        $ordine->quantita_quattro=$quantita_quattro;
        $ordine->prodotto_cinque=$prodotto_cinque;
        $ordine->quantita_cinque=$quantita_cinque;
        $ordine->prodotto_sei=$prodotto_sei;
        $ordine->quantita_sei=$quantita_sei;
        $ordine->descrizione=$descrizione; 
        $ordine->user_id=$user_id; 
        $ordine->save();
    }

   
    public function eliminaOrdine($id) {
        $ordine = Ordine::find($id);
        $ordine->delete();
    }

    public function findProdottoByName($nome) {
        $prodotti = Prodotto::where('nome', $nome)->get();
        if(count($prodotti)==0){
            return false;
        } else {
            return true;
        }
    }

    public function findUserByEmail($email) {
        $users = User::where('email', $email)->get();
        if(count($users)==0){
            return false;
        } else {
            return true;
        }
    }



}