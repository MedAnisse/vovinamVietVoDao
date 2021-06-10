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
            $table->foreignId('joueurBlue')->constrained('joueur');
            $table->integer('scoreBlue');
            $table->foreignId('entraineurBlue')->constrained('entraineur');
            $table->foreignId('controllerBlue')->constrained('controller');
            $table->foreignId('jugeBlue')->constrained('juge');
            $table->foreignId('joueurRed')->constrained('joueur');
            $table->integer('scoreRed');
            $table->foreignId('entraineurRed')->constrained('entraineur');
            $table->foreignId('controllerRed')->constrained('controller');
            $table->foreignId('jugeRed')->constrained('juge');
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
