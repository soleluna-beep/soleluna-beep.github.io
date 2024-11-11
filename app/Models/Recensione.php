<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recensione extends Model
{
    protected $table = 'recensione';
    //protected $primaryKey = 'alter_field_as_primary_key';
    //use SoftDeletes;
    public $timestamps = false;
    use HasFactory;

    protected $fillable = ['autore','stelle', 'testo'];


}
