<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;
    //PARA LUEGO CREAR LA CLASE MODELO ProffesorMODEL
    protected $fillable = [
        'firstName',
        'lastName',
        'city',
        'address',
        'salary',
    ];
}
