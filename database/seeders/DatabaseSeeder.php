<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(2)->create();

        Schema::disableForeignKeyConstraints();
        // User::factory()->create([
        //     [
        //         'name' => 'Test User',
        //         'email' => 'test@example.com',
        //     ],
        //     [
        //         'name' => 'John Doe',
        //         'email' => 'johndoe@example.com'
        //     ]
        // ]);
        $this->call([
            PostSeeder::class,
            CommentSeeder::class
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
