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
                'phone' => '0123456789',
                'email' =>  'Benjamin@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'username' => 'Jasmine',
                'user_id' => 'EST2',
                'name' =>  'Jasmine',
                'phone' => '0123456789',
                'email' =>  'Jasmine@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'username' => 'Jennie',
                'user_id' => 'EST3',
                'name' =>  'Jennie',
                'phone' => '0123456789',
                'email' =>  'Jennie@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'username' => 'Leslie',
                'user_id' => 'EST4',
                'name' =>  'Leslie',
                'phone' => '0123456789',
                'email' =>  'Leslie@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'username' => 'Carolyn',
                'user_id' => 'EST5',
                'name' =>  'Carolyn',
                'phone' => '0123456789',
                'email' =>  'Carolyn@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'username' => 'Charlie',
                'user_id' => 'EST6',
                'name' =>  'Charlie',
                'phone' => '0123456789',
                'email' =>  'Charlie@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'username' => 'Christine',
                'user_id' => 'EST7',
                'name' =>  'Christine',
                'phone' => '0123456789',
                'email' =>  'Christine@gmail.com',
                'password' => Hash::make('password'),
            ]
        ]);
    }
}
