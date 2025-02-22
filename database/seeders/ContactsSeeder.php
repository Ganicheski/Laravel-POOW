<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            'name' => 'João Silva',
            'email' => 'joao@gmail.com',
            'telefone' => '(00) 9999-9900',
            'data_nascimento' => '1990-05-15'
        ]);

        DB::table('contacts')->insert([
            'name' => 'Maria Souza',
            'email' => 'maria@gmail.com',
            'telefone' => '(11) 1111-1111',
            'data_nascimento' => '1985-10-20'
        ]);
    }
}
