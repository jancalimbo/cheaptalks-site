<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public $user;
    
    public function run()
    {

        $posts = [
            [
                'user_id' => '1',
                'title' => 'Hello World',
                'content' => 'This is a content in the database.',
            ],
            [
                'user_id' => '2',
                'title' => 'I Love Vue',
                'content' => 'So much.',
            ],
            [
                'user_id' => '3',
                'title' => 'What the hell?',
                'content' => 'I was so pissed that this was so easy',
            ],
            [
                'user_id' => '1',
                'title' => 'Here we go again',
                'content' => 'I am here in this road again. I am lost. I think I need help.',
            ],
            [
                'user_id' => '2',
                'title' => 'Capstone Cutie',
                'content' => 'Jan can do this!',
            ],
            [
                'user_id' => '3',
                'title' => 'Go Jan',
                'content' => 'You can do it!',
            ],
        ];

        foreach($posts as $post) {
            Post::create($post);
        }
    }
}
