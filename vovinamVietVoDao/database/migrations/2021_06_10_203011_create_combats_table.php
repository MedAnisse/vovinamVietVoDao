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
            $table->foreignId('joueurBlue')->constrained('joueur');
            $table->integer('scoreBlue')->nullable();
            $table->foreignId('entraineurBlue')->constrained('entraineur');
            $table->foreignId('controllerBlue')->constrained('controller');
            $table->foreignId('joueurRed')->constrained('joueur');
            $table->integer('scoreRed')->nullable();
            $table->foreignId('entraineurRed')->constrained('entraineur');
            $table->foreignId('controllerRed')->constrained('controller');
            $table->foreignId('arbitre_id')->constrained();
            $table->foreignId('juge_id')->constrained();
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
        Schema::dropIfExists('combats');
    }
}
