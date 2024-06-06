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
            'entidade_id' => '20',
            'title' => 'Nome da noticia',
            'description' => 'Descrição da Entidade'
        ]);
        Noticia::create([
            'entidade_id' => '20',
            'title' => 'Nome da noticia',
            'description' => 'Descrição da Entidade'
        ]);
        Noticia::create([
            'entidade_id' => '20',
            'title' => 'Nome da noticia',
            'description' => 'Descrição da Entidade'
        ]);
        Noticia::create([
            'entidade_id' => '20',
            'title' => 'Nome da noticia',
            'description' => 'Descrição da Entidade'
        ]);
        Noticia::create([
            'entidade_id' => '20',
            'title' => 'Nome da noticia',
            'description' => 'Descrição da Entidade'
        ]);
        Noticia::create([
            'entidade_id' => '20',
            'title' => 'Nome da noticia',
            'description' => 'Descrição da Entidade'
        ]);
    }
}
