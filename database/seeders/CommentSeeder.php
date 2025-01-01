<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->truncate();

        $data = [
            [
                'post_id' => 1,
                'commented_by' => 2,
                'comment' => 'Comment to the first post'
            ],
            [
                'post_id' => 1,
                'commented_by' => 2,
                'comment' => 'Second comment'
            ],
        ];

        DB::table('comments')->insert($data);
    }
}
