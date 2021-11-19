<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmigoOculto extends Model
{
    use HasFactory;
    protected $fillable = [
        'tema',
        'entregas',

    ];

    public function UserAmigo()
    {
        return $this->hasMany('App/Models/UserAmigo');
    }
}
