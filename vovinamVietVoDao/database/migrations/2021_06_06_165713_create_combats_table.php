<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCombatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('combats', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('round');
            $table->integer('scoreRed');
            $table->integer('scoreBlue');
            $table->foreignId('entraineurRed')->constrained('entraineur');
            $table->foreignId('entraineurBlue')->constrained('entraineur');
            $table->foreignId('salle_id')->constrained();
            $table->foreignId('joueurBlue')->constrained('joueur');
            $table->foreignId('joueurRed')->constrained('joueur');
            $table->foreignId('arbitre_id')->constrained();
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
        Schema::dropIfExists('combats');
    }
}
