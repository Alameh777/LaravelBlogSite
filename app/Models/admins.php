<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class admins extends Authenticatable
{
    //
      use HasFactory, Notifiable;

    // Allow mass assignment
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Hide password in JSON
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
