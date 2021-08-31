<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devedor extends Model
{
    use HasFactory;
    protected $fillable = ['nome_devedor', 'cnpj_devedor'];
}
