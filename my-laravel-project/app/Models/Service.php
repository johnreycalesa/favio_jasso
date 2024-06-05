<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $primaryKey = 'service_id';

    protected $fillable = [
        'service_name', 'service_description', 'status'
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'service_id', 'service_id');
    }
}