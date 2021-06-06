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
        'date',
        'round',
        'scoreRed',
        'scoreBlue',
        'entraineurRed',
        'entraineurBlue',
        'salle_id',
        'joueurBlue',
        'joueurRed',
        'arbitre_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'date' => 'date',
        'entraineurRed' => 'integer',
        'entraineurBlue' => 'integer',
        'salle_id' => 'integer',
        'joueurBlue' => 'integer',
        'joueurRed' => 'integer',
        'arbitre_id' => 'integer',
    ];


    public function entraineurRed()
    {
        return $this->belongsTo(\App\Models\Entraineur::class);
    }

    public function entraineurBlue()
    {
        return $this->belongsTo(\App\Models\Entraineur::class);
    }

    public function salle()
    {
        return $this->belongsTo(\App\Models\Salle::class);
    }

    public function joueurBlue()
    {
        return $this->belongsTo(\App\Models\Joueur::class);
    }

    public function joueurRed()
    {
        return $this->belongsTo(\App\Models\Joueur::class);
    }

    public function arbitre()
    {
        return $this->belongsTo(\App\Models\Arbitre::class);
    }
}
