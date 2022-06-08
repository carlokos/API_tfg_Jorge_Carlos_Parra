<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

/**
 * La clase tiene que estar igual que en la base de datos, 
 */
class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;

    /**
     * The attributes that are mass assignable.
     *  Debe llevar los mismos campos que la BD, incluido los Timestaps
     * Tambien se le puede poner un SoftDelete pero no se usa en este ejemplo
     * @var array
     */
    protected $fillable = [
        'Id',
        'Name',
        'Subname',
        'Telf',
        'Email',
        'Password',
        'created_at',
        'update_at'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     * Por regla general, se suele poner la contraseña por temas de seguridad,
     * ademas a veces se suele poner el create_at y el update_at ya que son campos
     * que solo se deberia ver en la BD
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
