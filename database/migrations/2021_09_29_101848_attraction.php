<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Attraction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attraction', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nom');
            $table->tinyInteger('accueil');
            $table->tinyInteger('type_id');
            $table->tinyInteger('si_partenaire');
            $table->text('chemin_mini')->nullable();
            $table->text('chemin')->nullable();
            $table->text('url')->nullable();
            $table->float('tarif_promo')->nullable();
            $table->float('tarif_normal')->nullable();
            $table->text('email')->nullable();
            $table->text('tel')->nullable();
            $table->text('fax')->nullable();
            $table->mediumInteger('ville_id')->nullable();
            $table->text('cp')->nullable();
            $table->text('adresse')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('attraction');
    }
}
