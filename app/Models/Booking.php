<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'field_id',
        'booking_date',
        'start_time',
        'end_time',
        'status',
    ];

    // Relasi: booking milik user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi: booking milik lapangan (field)
    public function field()
    {
        return $this->belongsTo(Field::class);
    }
}

