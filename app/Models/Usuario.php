<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Usuario extends Authenticatable
{
    use Notifiable;
    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario';
    protected $fillable = ['Nombre', 'Apellido_paterno', 'Apellido_materno', 'Email', 'Contraseña', 'Días', 'ID_rol'];
}
