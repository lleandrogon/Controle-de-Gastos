<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TransacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transacoes')->insert([
            [
                'nome' => 'João Carlos',
                'valor' => 25.00,
                'tipo' => 'saida',
                'descricao' => 'Arroz com frango',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'Mix Matheus',
                'valor' => 1500.50,
                'tipo' => 'saida',
                'descricao' => 'Feira do mês',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'Infinix',
                'valor' => 3000.00,
                'tipo' => 'entrada',
                'descricao' => 'Site para a empresa',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'Mercado Livre',
                'valor' => 1700.00,
                'tipo' => 'saida',
                'descricao' => 'Baixo Cort Action',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'Joana Maria',
                'valor' => 1400.00,
                'tipo' => 'entrada',
                'descricao' => 'TV Samsung',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
