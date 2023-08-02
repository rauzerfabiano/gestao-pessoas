<?php

namespace Database\Factories;

use App\Models\Pessoa;
use Illuminate\Database\Eloquent\Factories\Factory;

class PessoaFactory extends Factory
{
    protected $model = Pessoa::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'cpf' => $this->faker->numerify('###.###.###-##'),
            'email' => $this->faker->safeEmail,
            'categoria' => $this->faker->randomDigitNotNull, // Supondo que seja um número válido em sua tabela 'categorias'
            'updated_at' => now(),
            'created_at' => now(),
        ];
    }
}