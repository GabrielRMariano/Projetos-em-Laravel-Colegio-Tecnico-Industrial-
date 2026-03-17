<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    public function run(): void
    {
        Curso::create([
            'titulo' => 'Laravel Básico',
            'descricao' => 'Aprenda Laravel do zero',
            'imagem' => 'img/cursos/laravel.png',
            'valor' => '199',
            'publicado' => 'sim'
        ]);

        Curso::create([
            'titulo' => 'PHP Orientado a Objetos',
            'descricao' => 'Domine POO com PHP',
            'imagem' => 'img/cursos/php.png',
            'valor' => '149',
            'publicado' => 'sim'
        ]);

        Curso::create([
            'titulo' => 'JavaScript Moderno',
            'descricao' => 'Aprenda JS ES6+',
            'imagem' => 'img/cursos/js.png',
            'valor' => '179',
            'publicado' => 'nao'
        ]);
    }
}