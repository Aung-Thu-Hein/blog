<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->truncate();

        $data = [
            [
                'title' => 'Post Title 1',
                'body' => 'This is my first post',
                'created_by' => 1
            ],
            [
                'title' => 'Post Title 2',
                'body' => 'This is my second post',
                'created_by' => 1
            ],
            [
                'title' => 'Post Title 3',
                'body' => 'This is my third post',
                'created_by' => 2
            ],

        ];

        DB::table('posts')->insert($data);
    }
}
