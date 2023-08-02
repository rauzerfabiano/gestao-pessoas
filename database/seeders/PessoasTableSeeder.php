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
            ['Nome' => 'Jorge da Silva', 'CPF' => $faker->cpf(false), 'E-mail' => 'jorge@terra.com.br', 'Categoria' => 1],
            ['Nome' => 'Flavia Monteiro', 'CPF' => $faker->cpf(false), 'E-mail' => 'flavia@globo.com', 'Categoria' => 2],
            ['Nome' => 'Marcos Frota Ribeiro', 'CPF' => $faker->cpf(false), 'E-mail' => 'ribeiro@gmail.com', 'Categoria' => 2],
            ['Nome' => 'Raphael Souza Santos', 'CPF' => $faker->cpf(false), 'E-mail' => 'rsantos@gmail.com', 'Categoria' => 1],
            ['Nome' => 'Pedro Paulo Mota', 'CPF' => $faker->cpf(false), 'E-mail' => 'ppmota@gmail.com', 'Categoria' => 1],
            ['Nome' => 'Winder Carvalho da Silva', 'CPF' => $faker->cpf(false), 'E-mail' => 'winder@hotmail.com', 'Categoria' => 3],
            ['Nome' => 'Maria da Penha Albuquerque', 'CPF' => $faker->cpf(false), 'E-mail' => 'mpa@hotmail.com', 'Categoria' => 3],
            ['Nome' => 'Rafael Garcia Souza', 'CPF' => $faker->cpf(false), 'E-mail' => 'rgsouza@hotmail.com', 'Categoria' => 3],
            ['Nome' => 'Tabata Costa', 'CPF' => $faker->cpf(false), 'E-mail' => 'tabata_costa@gmail.com', 'Categoria' => 2],
            ['Nome' => 'Ronil Camarote', 'CPF' => $faker->cpf(false), 'E-mail' => 'camarote@terra.com.br', 'Categoria' => 1],
            ['Nome' => 'Joaquim Barbosa', 'CPF' => $faker->cpf(false), 'E-mail' => 'barbosa@globo.com', 'Categoria' => 1],
            ['Nome' => 'Eveline Maria Alcantra', 'CPF' => $faker->cpf(false), 'E-mail' => 'ev_alcantra@gmail.com', 'Categoria' => 2],
            ['Nome' => 'João Paulo Vieira', 'CPF' => $faker->cpf(false), 'E-mail' => 'jpvieria@gmail.com', 'Categoria' => 1],
            ['Nome' => 'Carla Zamborlini', 'CPF' => $faker->cpf(false), 'E-mail' => 'zamborlini@terra.com.br', 'Categoria' => 3],
        ]);
    }
}
