<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Before
        $start = microtime(true);
        Post::factory()->count(1000)->create();
        ray(microtime(true) - $start); // 0.49113798141479

        // After
        $start = microtime(true);
        Post::query()->insert(
            Post::factory()->count(1000)->make()->toArray()
        );
        ray(microtime(true) - $start); // 0.15621304512024
    }
}
