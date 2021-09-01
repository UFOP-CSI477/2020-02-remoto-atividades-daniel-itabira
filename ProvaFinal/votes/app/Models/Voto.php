<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voto extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = [
        'user_id',
        'tema_id',
        'opcao',
        'data',
    ];

    public function votos() {
        return $this->hasMany(User::class);
    }
}
