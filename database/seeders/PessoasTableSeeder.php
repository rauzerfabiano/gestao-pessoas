<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PessoasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('pt_BR');
        DB::table('pessoas')->insert([
            ['nome' => 'Jorge da Silva', 'cpf' => $faker->cpf(false), 'email' => 'jorge@terra.com.br', 'categoria' => 1],
            ['nome' => 'Flavia Monteiro', 'cpf' => $faker->cpf(false), 'email' => 'flavia@globo.com', 'categoria' => 2],
            ['nome' => 'Marcos Frota Ribeiro', 'cpf' => $faker->cpf(false), 'email' => 'ribeiro@gmail.com', 'categoria' => 2],
            ['nome' => 'Raphael Souza Santos', 'cpf' => $faker->cpf(false), 'email' => 'rsantos@gmail.com', 'categoria' => 1],
            ['nome' => 'Pedro Paulo Mota', 'cpf' => $faker->cpf(false), 'email' => 'ppmota@gmail.com', 'categoria' => 1],
            ['nome' => 'Winder Carvalho da Silva', 'cpf' => $faker->cpf(false), 'email' => 'winder@hotmail.com', 'categoria' => 3],
            ['nome' => 'Maria da Penha Albuquerque', 'cpf' => $faker->cpf(false), 'email' => 'mpa@hotmail.com', 'categoria' => 3],
            ['nome' => 'Rafael Garcia Souza', 'cpf' => $faker->cpf(false), 'email' => 'rgsouza@hotmail.com', 'categoria' => 3],
            ['nome' => 'Tabata Costa', 'cpf' => $faker->cpf(false), 'email' => 'tabata_costa@gmail.com', 'categoria' => 2],
            ['nome' => 'Ronil Camarote', 'cpf' => $faker->cpf(false), 'email' => 'camarote@terra.com.br', 'categoria' => 1],
            ['nome' => 'Joaquim Barbosa', 'cpf' => $faker->cpf(false), 'email' => 'barbosa@globo.com', 'categoria' => 1],
            ['nome' => 'Eveline Maria Alcantra', 'cpf' => $faker->cpf(false), 'email' => 'ev_alcantra@gmail.com', 'categoria' => 2],
            ['nome' => 'João Paulo Vieira', 'cpf' => $faker->cpf(false), 'email' => 'jpvieria@gmail.com', 'categoria' => 1],
            ['nome' => 'Carla Zamborlini', 'cpf' => $faker->cpf(false), 'email' => 'zamborlini@terra.com.br', 'categoria' => 3],
        ]);
    }
}
