<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'name', 'address', 'email', 'phone_number', 'role', 'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];



    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'user_id', 'user_id');
    }

    public function availabilities()
    {
        return $this->hasMany(Availability::class, 'service_id', 'user_id');
    }
}
