<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->update([
            'nome' => 'Chuteira',
            'quantidade' => 10,
            'valor' => 500.10,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Bola',
            'quantidade' => 15,
            'valor' => 100.10,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Luva de Goleiro',
            'quantidade' => 20,
            'valor' => 250.99,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Apito',
            'quantidade' => 5,
            'valor' => 25.00,
        ]);
    }
}
