<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Models;

class Usuarios extends Models
{
    protected $table = 'usuario';

    protected $fillable = [
        'cd_usuario',
        'nm_usuario',
        'nm_email'
    ];

    protected $casts = [
        'date' => 'Timestamp'
    ];

    public $timestamps = false;

}