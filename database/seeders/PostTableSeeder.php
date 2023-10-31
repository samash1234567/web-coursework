<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $p1 = new Post;
        $p1->postcontent= "this is the content for the post";

        $p1->save();

        $p2 = new Post;
        $p2->postcontent= "wow post 2 content";

        $p2->save();

        $p3 = new Post;
        $p3->postcontent= "again good content for this third post";

        $p3->save();

        Post::factory()->count(50)->create();
    }
}
