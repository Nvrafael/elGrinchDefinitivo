<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    // Define los campos de la base de datos, si es necesario
    protected $fillable = [
        'name', 'email', 'password',
    ];

    // Define si la contraseña está cifrada al guardar
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Define las reglas de autenticación si son necesarias
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
