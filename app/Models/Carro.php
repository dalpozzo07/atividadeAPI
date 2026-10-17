<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $table = 'carro';

    // aqui a gente passa os dados que podem ser preenchidos no banco de dados, no caso modelo, marca e ano
    protected $fillable = [
        'modelo',
        'marca',
        'ano',
    ];
}
