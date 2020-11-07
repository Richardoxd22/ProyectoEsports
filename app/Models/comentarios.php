<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comentarios extends Model
{
    use HasFactory;
    protected $table = 'comentarios';
    protected $fillable = ['id_comentarios', 'id', 'id_noticia', 'fecha', 'comentario', 'rating'];
    protected $primaryKey = 'id_comentarios';
    public $incrementing = false;
    protected $keyType = 'int';
    public $timestamps = false;
}
