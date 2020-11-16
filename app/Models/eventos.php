<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eventos extends Model
{
    use HasFactory;
    protected $table = 'eventos';
    protected $fillable = ['id_eventos', 'tituloevento', 'juegotorneo', 'informaciontorneo', 'discord', 'auth'];
    protected $primaryKey = 'id_eventos';
    public $incrementing = false;
    protected $keyType = 'int';
    public $timestamps = false;
}
