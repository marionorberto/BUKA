<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    public $incrementing = false;         // Desativa autoincremento
    protected $keyType = 'string';        // Define tipo da chave como string

    protected $primaryKey = 'id_user';
    protected $table = 'users';
    protected $fillable = [
        'id',
        'firstname',
        'lastname',
        'username',
        'email',
        'password',
        'role'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id_user)) {
                $model->id_user = (string) Str::uuid();
            }
        });
    }
}
