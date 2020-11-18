<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eventos extends Model
{
    use HasFactory;
    protected $table = 'eventos';
<<<<<<< HEAD
    protected $fillable = ['id_eventos', 'tituloevento', 'juegotorneo', 'informaciontorneo', 'discord', 'auth','eventofecha','eventoimagen'];
=======
    protected $fillable = ['id_eventos', 'tituloevento', 'juegotorneo', 'informaciontorneo', 'discord', 'auth', 'eventofecha', 'eventoimagen'];
>>>>>>> fd451a082449d59f6ad10d6357b030aaa8e78ef1
    protected $primaryKey = 'id_eventos';
    public $incrementing = false;
    protected $keyType = 'int';
    public $timestamps = false;
}
