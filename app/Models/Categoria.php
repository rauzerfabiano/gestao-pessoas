<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigo';
    
    public function pessoas()
    {
        return $this->belongsTo(Pessoa::class);
    }
}
