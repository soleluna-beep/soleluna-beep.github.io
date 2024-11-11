<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodotto extends Model
{
    protected $table = 'prodotto';
    //protected $primaryKey = 'alter_field_as_primary_key';
    //use SoftDeletes;
    public $timestamps = false;
    use HasFactory;

    protected $fillable = ['immagine','nome', 'prezzo', 'stato'];


}
