<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'notes'
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}