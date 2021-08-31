<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credor extends Model
{   
    use HasFactory; //traits 

    protected $fillable = ['nome_credor', 'cpf_credor', 'status_credor'];
    
}
