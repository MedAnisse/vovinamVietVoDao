<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCombatHistoricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('combat_historics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('joueur_bleu_id');
            $table->unsignedBigInteger('entraineur_bleu_id');
            $table->unsignedBigInteger('juge_bleu_id');
            $table->unsignedBigInteger('controller_bleu_id');
            $table->integer('scoreBlue');
            $table->integer('scoreRed');
            $table->unsignedBigInteger('joueur_red_id');
            $table->unsignedBigInteger('entraineur_red_id');
            $table->unsignedBigInteger('controller_red_id');
            $table->unsignedBigInteger('juge_red_id');
            $table->foreignId('arbitre_id')->constrained();
            $table->date('date');
            $table->foreignId('salle_id')->constrained();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('combat_historics');
    }
}
