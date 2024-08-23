<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Specify mass assignable attributes
    protected $fillable = [
        'name',      // Add any other attributes that should be mass assignable
        'email',
        'password',
    ];

    // Many-to-Many relationship with Role
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
