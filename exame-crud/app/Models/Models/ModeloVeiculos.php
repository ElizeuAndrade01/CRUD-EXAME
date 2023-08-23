<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeloVeiculos extends Model
{
    public function relAcess(){
        return $this->hasOne('app/Http/Models/Models/Acessibilidade', 'id', 'id_acessibilidade');
    }
}
