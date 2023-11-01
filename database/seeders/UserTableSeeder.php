<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user1 = new User;
        $user1->name= "John";
        $user1->email= "john123@gmail.com";
        $user1->password= "johnisbest123";

        $user1->save();

        $user2 = new User;
        $user2->name= "Sam";
        $user2->email= "sam@gmail.com";
        $user2->password= "samtheman2";

        $user2->save();

        $user3 = new User;
        $user3->name= "Bill";
        $user3->email= "bill@gmail.com";
        $user3->password= "ohyes12345";

        $user3->save();

        $user = User::factory()
        ->has(Post::factory()->count(3), 'posts')
        ->create();

    }
}
