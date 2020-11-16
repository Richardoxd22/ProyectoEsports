<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comentarios extends Model
{
    use HasFactory;
    protected $table = 'comentarios';
    protected $fillable = ['id_comentarios', 'auth', 'id_noticia', 'fecha', 'comentario',];
    protected $primaryKey = 'id_comentarios';
    public $incrementing = false;
    protected $keyType = 'int';
    public $timestamps = false;
}
