<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = ['doctor_id', 'name', 'phone', 'dob', 'email', 'gender', 'address', 'note', 'time', 'service', 'status'];

    protected $casts = [
        'time' => 'datetime'
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
