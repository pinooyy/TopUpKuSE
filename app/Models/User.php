<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // Pakai kolom 'username' sebagai primary key
    protected $primaryKey = 'username';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    // Ini penting agar Auth juga pakai 'username'
    public function getAuthIdentifierName()
    {
        return 'username';
    }
}
