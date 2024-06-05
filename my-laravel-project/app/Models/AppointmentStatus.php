<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentStatus extends Model
{
    use HasFactory;

    protected $table = 'appointment_status';

    protected $primaryKey = 'status_id';

    protected $fillable = [
        'status_name'
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'status_id', 'status_id');
    }
}
