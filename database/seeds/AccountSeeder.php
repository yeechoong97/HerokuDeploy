<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            [
                'user_id' => 'EST1',
                'balance' =>  50000.00,
                'margin' =>  50000.00,
                'margin_used' =>  0.00,
                'leverage' => '30 : 1',
                'tutorial' => 0
            ],
            [
                'user_id' => 'EST2',
                'balance' =>  50000.00,
                'margin' =>  50000.00,
                'margin_used' =>  0.00,
                'leverage' => '30 : 1',
                'tutorial' => 0
            ],
            [
                'user_id' => 'EST3',
                'balance' =>  50000.00,
                'margin' =>  50000.00,
                'margin_used' =>  0.00,
                'leverage' => '30 : 1',
                'tutorial' => 0
            ],
            [
                'user_id' => 'EST4',
                'balance' =>  50000.00,
                'margin' =>  50000.00,
                'margin_used' =>  0.00,
                'leverage' => '30 : 1',
                'tutorial' => 0
            ],
            [
                'user_id' => 'EST5',
                'balance' =>  50000.00,
                'margin' =>  50000.00,
                'margin_used' =>  0.00,
                'leverage' => '30 : 1',
                'tutorial' => 0
            ],
            [
                'user_id' => 'EST6',
                'balance' =>  50000.00,
                'margin' =>  50000.00,
                'margin_used' =>  0.00,
                'leverage' => '30 : 1',
                'tutorial' => 0
            ],
            [
                'user_id' => 'EST7',
                'balance' =>  50000.00,
                'margin' =>  50000.00,
                'margin_used' =>  0.00,
                'leverage' => '30 : 1',
                'tutorial' => 0
            ]
        ]);
    }
}
