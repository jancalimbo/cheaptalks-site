<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'lname' => 'ALWAYS',
                'fname' => 'TILTED',
                'username' => 'admin',
                'gender' => 'Female',
                'role' => 'admin',
                'password' => bcrypt('thisisapassword'),
                'email' => 'alwaystilted@gmail.com',
                'status' => 'authorized',
                'email_verified_at' => now()
            ],
        ];

        foreach($users as $user) {
            User::create($user)->assignRole('admin');
        }
    }
}
