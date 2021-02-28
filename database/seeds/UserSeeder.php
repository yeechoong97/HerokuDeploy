<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'Benjamin',
                'user_id' => 'EST1',
                'name' =>  'Benjamin',
                'avatar'=> 'https://res.cloudinary.com/fyp202105/image/upload/v1614037855/Avatar/Avatar-1.png',
                'phone' => '0123456789',
                'email' =>  'Benjamin@gmail.com',
                'tutorial' => 0,
                'password' => Hash::make('password'),
            ],
            [
                'username' => 'Jasmine',
                'user_id' => 'EST2',
                'name' =>  'Jasmine',
                'avatar'=> 'https://res.cloudinary.com/fyp202105/image/upload/v1614037855/Avatar/Avatar-5.png',
                'phone' => '0123456789',
                'email' =>  'Jasmine@gmail.com',
                'tutorial' => 0,
                'password' => Hash::make('password'),
            ],
            [
                'username' => 'Jennie',
                'user_id' => 'EST3',
                'name' =>  'Jennie',
                'avatar'=> 'https://res.cloudinary.com/fyp202105/image/upload/v1614037855/Avatar/Avatar-2.png',
                'phone' => '0123456789',
                'email' =>  'Jennie@gmail.com',
                'tutorial' => 0,
                'password' => Hash::make('password'),
            ],
            [
                'username' => 'Leslie',
                'user_id' => 'EST4',
                'name' =>  'Leslie',
                'avatar'=> 'https://res.cloudinary.com/fyp202105/image/upload/v1614037856/Avatar/Avatar-14.png',
                'phone' => '0123456789',
                'email' =>  'Leslie@gmail.com',
                'tutorial' => 0,
                'password' => Hash::make('password'),
            ],
            [
                'username' => 'Carolyn',
                'user_id' => 'EST5',
                'name' =>  'Carolyn',
                'avatar'=> 'https://res.cloudinary.com/fyp202105/image/upload/v1614037856/Avatar/Avatar-11.png',
                'phone' => '0123456789',
                'email' =>  'Carolyn@gmail.com',
                'tutorial' => 0,
                'password' => Hash::make('password'),
            ],
            [
                'username' => 'Charlie',
                'user_id' => 'EST6',
                'name' =>  'Charlie',
                'avatar'=> 'https://res.cloudinary.com/fyp202105/image/upload/v1614037855/Avatar/Avatar-7.png',
                'phone' => '0123456789',
                'email' =>  'Charlie@gmail.com',
                'tutorial' => 0,
                'password' => Hash::make('password'),
            ],
            [
                'username' => 'Christine',
                'user_id' => 'EST7',
                'name' =>  'Christine',
                'avatar'=> 'https://res.cloudinary.com/fyp202105/image/upload/v1614037855/Avatar/Avatar-16.png',
                'phone' => '0123456789',
                'email' =>  'Christine@gmail.com',
                'tutorial' => 0,
                'password' => Hash::make('password'),
            ]
        ]);
    }
}
