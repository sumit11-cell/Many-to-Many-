<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // Specify fillable attributes for mass assignment
    protected $fillable = [
        // List only the columns that exist in your `roles` table
        'name', // Example of a column that might exist in the `roles` table
        'description', // Another example column
    ];

    // Many-to-Many relationship with User
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}




