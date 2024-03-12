<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tarefa2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tarefa2')->insert([
            ['nome'=>'Gabriel Ragale', 'raca'=>'elfo', 'classe' =>'ladino','idade'=>'300','arma'=>'arco'],
            ['nome'=>'Elena Starlight', 'raca'=>'humana', 'classe' =>'mago','idade'=>'150','arma'=>'cetro'],
            ['nome'=>'Thorn Shadowblade', 'raca'=>'anão', 'classe' =>'guerreiro','idade'=>'200','arma'=>'machado'],
            ['nome'=>'Thorn Shadowblade', 'raca'=>'anão', 'classe' =>'guerreiro','idade'=>'200','arma'=>'machado'],
            ['nome'=>'Zara Blackthorn', 'raca'=>'meio-orc', 'classe' =>'bárbaro','idade'=>'180','arma'=>'grande machado']
        ]);
        }
}
