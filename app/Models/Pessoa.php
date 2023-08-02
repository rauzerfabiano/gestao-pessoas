<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigo';

    protected $fillable = [
        'nome', 'cpf', 'email', 'categoria',
    ];

    public function categoria()
    {
        return $this->hasOne(Categoria::class, 'codigo', 'categoria');
    }
}

