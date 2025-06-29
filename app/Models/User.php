<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; 

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'no_hp', 'password', 'role',
    ];

    protected $hidden = [
        'password',
    ];

    // Relasi: 1 user bisa punya banyak booking
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
