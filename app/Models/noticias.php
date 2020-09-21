<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class noticias extends Model
{
    use HasFactory;
    protected $table = 'noticias';
    protected $fillable = ['titulonoticia', 'juego', 'informacion', 'id_noticia', 'id'];
    protected $primaryKey = 'id_noticia';
    public $incrementing = false;
    protected $keyType = 'int';
    public $timestamps = false;
}
