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
                'user_id' => '3',
                'title' => 'The Lakes',
                'content' => "Take me to the lakes where all the poets went to die because I don't belong here and neither do you.",
                'category' => 'Love',
            ],
            [
                'user_id' => '1',
                'title' => 'Journey To You',
                'content' => "Hell was the journey but it brought me heaven.",
                'category' => 'Supernatural',
            ],
            [
                'user_id' => '1',
                'title' => 'Lowkey',
                'content' => "They think love's for show but I would die for you in secret.",
                'category' => 'Love',
            ],
            
            [
                'user_id' => '1',
                'title' => 'Shady',
                'content' => 'Did you think I would not hear all the things you said about me?',
                'category' => 'Life',
            ],
            [
                'user_id' => '1',
                'title' => 'Invisible String',
                'content' => 'Is it not just so pretty to think? All along there was some invisible string tying you to me.',
                'category' => 'Love',
            ],
            [
                'user_id' => '2',
                'title' => 'Tears Ricochet',
                'content' => 'I can go anywhere I want but just not home and you can aim for my heart and go for blood but you would still miss me in your bones.',
                'category' => 'Love',
            ],
            [
                'user_id' => '3',
                'title' => 'Ivy',
                'content' => 'Clover blooms in the fields, spring breaks loose, the time is near. What would he do if he found us out?',
                'category' => 'Love',
            ],
            [
                'user_id' => '1',
                'title' => 'Champagne Problems',
                'content' => 'I dropped your hand while dancing and left you out there standing crestfallen on the landing.',
                'category' => 'Love',
            ],
            [
                'user_id' => '2',
                'title' => '-',
                'content' => 'I had to kill you but you killed me just the same. Cursing your name, wishing I stayed, I turned into my worst fears.',
                'category' => 'Fiction',
            ],
            [
                'user_id' => '3',
                'title' => 'Why We Cannot Have Nice Things',
                'content' => 'Somebody breaks them then you would have to take them away.',
                'category' => 'Life',
            ],
            [
                'user_id' => '2',
                'title' => 'Burning',
                'content' => 'I am a fire and I will keep your brittle heart warm when your cascade ocean wave blues come.',
                'category' => 'Fiction',
            ],
            [
                'user_id' => '1',
                'title' => 'Windowsill',
                'content' => "I passed your house and I couldn't breathe.",
                'category' => 'Love',
            ],
            [
                'user_id' => '3',
                'title' => 'Tryst',
                'content' => "Meet me where the spirit meets the bones.",
                'category' => 'Supernatural',
            ],
           
        ];

        foreach($posts as $post) {
            Post::create($post);
        }
    }
}
