<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;
    protected $guard = 'user';

    protected $fillable = [
        'username',
        'password',
        'permission',
    ];
    protected $hidden = [
        'password',
    ];
}

