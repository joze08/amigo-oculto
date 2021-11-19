<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAmigo extends Model
{
    use HasFactory;
    protected $fillable = [
        'userId',
        'amigoId'
    ];
    public function User()
    {
        return $this->belongsTo('App/Models/User');
    }
    public function AmigoOculto()
    {
        return $this->belongsTo('App/Models/AmigoOculto');
    }
}
