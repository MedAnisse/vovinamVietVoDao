<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CombatHistoric extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
        'joueur_bleu_id',
        'entraineur_bleu_id',
        'juge_bleu_id',
        'controller_bleu_id',
        'scoreBlue',
        'scoreRed',
        'joueur_red_id',
        'entraineur_red_id',
        'controller_red_id',
        'juge_red_id',
        'arbitre_id',
        'date',
        'salle_id',
    ];


    public function joueurBleu()
    {
        return $this->belongsTo(\App\Models\Joueur::class);
    }

    public function entraineurBleu()
    {
        return $this->belongsTo(\App\Models\Entraineur::class);
    }

    public function jugeBleu()
    {
        return $this->belongsTo(\App\Models\Juge::class);
    }

    public function controllerBleu()
    {
        return $this->belongsTo(\App\Models\Controller::class);
    }

    public function joueurRed()
    {
        return $this->belongsTo(\App\Models\Joueur::class);
    }

    public function entraineurRed()
    {
        return $this->belongsTo(\App\Models\Entraineur::class);
    }

    public function controllerRed()
    {
        return $this->belongsTo(\App\Models\Controller::class);
    }

    public function jugeRed()
    {
        return $this->belongsTo(\App\Models\Juge::class);
    }

    public function arbitre()
    {
        return $this->belongsTo(\App\Models\Arbitre::class);
    }

    public function salle()
    {
        return $this->belongsTo(\App\Models\Salle::class);
    }
}
