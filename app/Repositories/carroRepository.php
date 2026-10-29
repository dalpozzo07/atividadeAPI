<?php

namespace App\Repositories;

use App\Models\Carro;

class carroRepository
{
    public function search(array $filtros = []){
        $query = Carro::query();

        if(isset($filtros['marca'])){
            $query->where('marca', $filtros['marca']);
        }

        if (isset($filtros['ano'])) {
            $query->where('ano', $filtros['ano']);
        }
        
        return $query->get();
    }
}