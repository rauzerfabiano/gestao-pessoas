<?php

namespace Tests\Feature;

use Tests\TestCase;
use Faker\Factory as Faker;

class PessoaTest extends TestCase
{   
    public function test_can_create_pessoa()
    {
        $categoria = \App\Models\Categoria::factory()->create();
        $faker = Faker::create('pt_BR');
        $data = [
            'nome' => $faker->name(),
            'cpf' => $faker->cpf(false),
            'email' => $faker->email(),
            'categoria' => $categoria->codigo,
        ];

        $response = $this->postJson('/api/pessoas', $data);

        $response->assertStatus(201);
        $response->assertJsonStructure([
            'nome',
            'cpf',
            'email',
            'categoria'
        ]);
    }

    public function test_can_update_pessoa()
    {
        // Cria uma pessoa para o teste
        $pessoa = \App\Models\Pessoa::factory()->create();

        $data = [
            'nome' => 'Updated Name',
        ];

        $response = $this->putJson("/api/pessoas/{$pessoa->codigo}", $data);

        $response->assertStatus(200);
        $response->assertJson(['nome' => 'Updated Name']);
    }

    public function test_can_delete_pessoa()
    {
        // Cria uma pessoa para o teste
        $pessoa = \App\Models\Pessoa::factory()->create();

        $response = $this->deleteJson("/api/pessoas/{$pessoa->codigo}");

        $response->assertStatus(204);
    }
}