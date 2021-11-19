<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmigoSorteado extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'userId'
    ];
    public function User()
    {
        return $this->belongsTo('App/Models/User');
    }
}
