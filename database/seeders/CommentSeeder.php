<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
                'comment' => 'Comment to the first post',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'post_id' => 1,
                'commented_by' => 2,
                'comment' => 'Second comment',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        DB::table('comments')->insert($data);
    }
}
