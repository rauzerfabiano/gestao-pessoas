<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PessoaTest extends TestCase
{
    use RefreshDatabase; // Limpar o banco de dados entre os testes

    public function test_can_create_pessoa()
    {
        $data = [
            'nome' => 'John Doe',
            'cpf' => '123.456.789-09',
            'email' => 'john@example.com',
            'categoria' => '2'
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

        $response = $this->putJson("/api/pessoas/2", $data);

        $response->assertStatus(200);
        $response->assertJson(['nome' => 'Updated Name']);
    }

    public function test_can_delete_pessoa()
    {
        // Cria uma pessoa para o teste
        $pessoa = \App\Models\Pessoa::factory()->create();

        $response = $this->deleteJson("/api/pessoas/2");

        $response->assertStatus(204);
    }

    public function test_can_list_pessoas()
    {
        // Cria várias pessoas para o teste
        \App\Models\Pessoa::factory(5)->create();

        $response = $this->getJson('/api/pessoas');

        $response->assertStatus(200);
        $response->assertJsonCount(5);
    }
}