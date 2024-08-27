<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TarefasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tarefas')->insert([
            'nome_tarefa' => 'Reunião',
            'descricao' => 'Reunião hoje as 15:30',
            'status' => 'Concluída',
        ]);

        DB::table('tarefas')->insert([
            'nome_tarefa' => 'Mercado',
            'descricao' => 'Ir ao mercado hoje',
            'status' => 'Pendente',
        ]);
    }
}
