<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Appointment; // 👈 FALTAVA ISSO

class Client extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'notes'
    ];

    // Um cliente pode ter vários agendamentos
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}