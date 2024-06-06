<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Noticia;
class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Noticia::create([
            'entidade_id' => '2',
            'title' => 'Nome da noticia',
            'description' => 'Descrição da Entidade'
        ]);
        Noticia::create([
            'entidade_id' => '3',
            'title' => 'Nome da noticia',
            'description' => 'Descrição da Entidade'
        ]);
        Noticia::create([
            'entidade_id' => '4',
            'title' => 'Nome da noticia',
            'description' => 'Descrição da Entidade'
        ]);
        Noticia::create([
            'entidade_id' => '5',
            'title' => 'Nome da noticia',
            'description' => 'Descrição da Entidade'
        ]);
        Noticia::create([
            'entidade_id' => '6',
            'title' => 'Nome da noticia',
            'description' => 'Descrição da Entidade'
        ]);
        Noticia::create([
            'entidade_id' => '7',
            'title' => 'Nome da noticia',
            'description' => 'Descrição da Entidade'
        ]);
    }
}
