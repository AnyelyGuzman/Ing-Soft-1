<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $users= array(
            [
                'name'=>"anyely",
                'email'=>"anyely07@hotmail.com",
                'password'=>\Hash::make("123456789")
            ],
            [
                'name'=>"alan",
                'email'=>"alan10@hotmail.com",
                'password'=>\Hash::make("123456789")
            ],
        );

        foreach ($users as $user) {
            User::updateOrCreate($user);
        }
    }
}
