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
        'joueurBlue',
        'scoreBlue',
        'entraineurBlue',
        'controllerBlue',
        'jugeBlue',
        'joueurRed',
        'scoreRed',
        'entraineurRed',
        'controllerRed',
        'jugeRed',
        'arbitre_id',
        'date',
        'salle_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'joueurBlue' => 'integer',
        'entraineurBlue' => 'integer',
        'controllerBlue' => 'integer',
        'jugeBlue' => 'integer',
        'joueurRed' => 'integer',
        'entraineurRed' => 'integer',
        'controllerRed' => 'integer',
        'jugeRed' => 'integer',
        'arbitre_id' => 'integer',
        'date' => 'date',
        'salle_id' => 'integer',
    ];


    public function joueurBlue()
    {
        return $this->belongsTo(\App\Models\Joueur::class);
    }

    public function entraineurBlue()
    {
        return $this->belongsTo(\App\Models\Entraineur::class);
    }

    public function controllerBlue()
    {
        return $this->belongsTo(\App\Models\Controller::class);
    }

    public function jugeBlue()
    {
        return $this->belongsTo(\App\Models\Juge::class);
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
