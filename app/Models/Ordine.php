<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordine extends Model
{
    protected $table = 'ordine';
    //protected $primaryKey = 'alter_field_as_primary_key';
    //use SoftDeletes;
    public $timestamps = false;
    use HasFactory;

    protected $fillable = ['prodotto_uno', 
                           'quantita_uno', 
                           'prodotto_due', 
                           'quantita_due',
                           'prodotto_tre', 
                           'quantita_tre',
                           'prodotto_quattro', 
                           'quantita_quattro',
                           'prodotto_cinque', 
                           'quantita_cinque',
                           'prodotto_sei', 
                           'quantita_sei',
                           'descrizione',  
                           'user_id'];

    public function user() {
        // the property $ordine->user returns an object of type User
        return $this->belongsTo(User::class);
    }

}