<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Combat extends Model
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
        'joueurRed',
        'scoreRed',
        'entraineurRed',
        'controllerRed',
        'arbitre_id',
        'juge_id',
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
        'joueurRed' => 'integer',
        'entraineurRed' => 'integer',
        'controllerRed' => 'integer',
        'arbitre_id' => 'integer',
        'juge_id' => 'integer',
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

    public function arbitre()
    {
        return $this->belongsTo(\App\Models\Arbitre::class);
    }

    public function juge()
    {
        return $this->belongsTo(\App\Models\Juge::class);
    }

    public function salle()
    {
        return $this->belongsTo(\App\Models\Salle::class);
    }
}
