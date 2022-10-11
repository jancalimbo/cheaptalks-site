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
                'category' => 'Adventure',
            ],
            [
                'user_id' => '2',
                'title' => 'I Love Vue',
                'content' => 'So much.',
                'category' => 'Life',
            ],
            [
                'user_id' => '3',
                'title' => 'What the hell?',
                'content' => 'I was so pissed that this was so easy',
                'category' => 'Anime',
            ],
            [
                'user_id' => '1',
                'title' => 'Here we go again',
                'content' => 'I am here in this road again. I am lost. I think I need help.',
                'category' => 'Horror',
            ],
            [
                'user_id' => '2',
                'title' => 'Capstone Cutie',
                'content' => 'Jan can do this!',
                'category' => 'Inspiration',
            ],
            [
                'user_id' => '3',
                'title' => 'Go Jan',
                'content' => 'You can do it!',
                'category' => 'Inspiration',
            ],
        ];

        foreach($posts as $post) {
            Post::create($post);
        }
    }
}
