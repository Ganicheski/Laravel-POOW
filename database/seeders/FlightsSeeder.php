<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  //Adicionado

class FlightsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {    //Adicionado Daqui
        DB::table('flights')->insert([   
            'nome' => 'Voo 737',
            'airline' => 'GOL'
        ]);  //Até Aqui
    }
}
