<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario2 extends Model
{
    use HasFactory;
    protected $table = 'usuarios';
    protected $fillable = ['auth', 'nickname', 'name', 'picture', 'email'];
    protected $primaryKey = 'auth';
    public $incrementing = false;
    protected $keyType = 'int';
    public $timestamps = false;
}
