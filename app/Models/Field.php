<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Field extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description',
    ];

    // Relasi: 1 field bisa punya banyak booking
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
