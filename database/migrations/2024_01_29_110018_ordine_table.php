<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordine', function (Blueprint $table) {
            $table->id();
            $table->String('prodotto_uno')->nullable();
            $table->integer('quantita_uno')->nullable();
            $table->String('prodotto_due')->nullable();
            $table->integer('quantita_due')->nullable();
            $table->String('prodotto_tre')->nullable();
            $table->integer('quantita_tre')->nullable();
            $table->String('prodotto_quattro')->nullable();
            $table->integer('quantita_quattro')->nullable();
            $table->String('prodotto_cinque')->nullable();
            $table->integer('quantita_cinque')->nullable();
            $table->String('prodotto_sei')->nullable();
            $table->integer('quantita_sei')->nullable();
            $table->String('descrizione',2000)->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordine');
    }
};
