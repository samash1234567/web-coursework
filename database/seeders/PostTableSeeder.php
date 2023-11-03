<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Thread;


class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $p1 = new Post;
        $p1->postcontent= "this is the content for the post";
        $p1->user_id= 1;
        $p1->thread_id= 2;
        $p1->save();

        $p2 = new Post;
        $p2->postcontent= "wow post 2 content";
        $p2->user_id= 3;
        $p2->thread_id=4;
        $p2->save();

        $p3 = new Post;
        $p3->postcontent= "again good content for this third post";
        $p3->user_id= 5;
        $p3->thread_id=6;
        $p3->save();


        Post::factory()->count(50)->create();

        // $post = Post::factory()
        // ->has(User::factory()->count(3))
        // ->has(Thread::factory()->count(3))
        // ->create();
    }
}
