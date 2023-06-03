<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Código para criar registros de exemplo na tabela de posts
        for ($i = 1; $i <= 10; $i++) {
            Post::create([
                'title' => 'Post ' . $i,
                'content' => 'Conteúdo do post ' . $i,
                'author' => 'Autor ' . $i,
            ]);
        }
    }
}
