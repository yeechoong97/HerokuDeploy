<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'user_id' => 'EST1',
                'ticketID' => 'AOD1',
                'type' => 'Long',
                'pair' => 'EUR_USD',
                'margin' => '320.15',
                'total_units' => 5000,
                'available_units'=> 0,
                'entry_price' => 1.19500,
                'status' => 1,
                'created_at' => Carbon::now()->subMonth(1)->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 'EST1',
                'ticketID' => 'AOD2',
                'type' => 'Long',
                'pair' => 'AUD_USD',
                'margin' => '124.15',
                'total_units' => 10000,
                'available_units'=> 0,
                'entry_price' => 0.77685,
                'status' => 1,
                'created_at' => Carbon::now()->subMonth(1)->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 'EST1',
                'ticketID' => 'AOD3',
                'type' => 'Long',
                'pair' => 'GBP_USD',
                'margin' => '741.15',
                'total_units' => 20000,
                'available_units'=> 0,
                'entry_price' => 1.19500,
                'status' => 1,
                'created_at' => Carbon::now()->subMonth(2)->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 'EST1',
                'ticketID' => 'AOD4',
                'type' => 'Short',
                'pair' => 'EUR_JPY',
                'margin' => '320.15',
                'total_units' => 10000,
                'available_units'=> 0,
                'entry_price' => 129.820,
                'status' => 1,
                'created_at' => Carbon::now()->subMonth(2)->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 'EST1',
                'ticketID' => 'AOD5',
                'type' => 'Long',
                'pair' => 'USD_JPY',
                'margin' => '320.15',
                'total_units' => 20000,
                'available_units'=> 0,
                'entry_price' => 108.550,
                'status' => 1,
                'created_at' => Carbon::now()->subMonth(3)->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 'EST1',
                'ticketID' => 'AOD6',
                'type' => 'Short',
                'pair' => 'AUD_USD',
                'margin' => '320.15',
                'total_units' => 10000,
                'available_units'=> 0,
                'entry_price' => 0.77698,
                'status' => 1,
                'created_at' => Carbon::now()->subMonth(3)->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 'EST1',
                'ticketID' => 'AOD7',
                'type' => 'Short',
                'pair' => 'USD_JPY',
                'margin' => '320.15',
                'total_units' => 20000,
                'available_units'=> 0,
                'entry_price' => 108.550,
                'status' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 'EST1',
                'ticketID' => 'AOD8',
                'type' => 'Short',
                'pair' => 'EUR_USD',
                'margin' => '320.15',
                'total_units' => 10000,
                'available_units'=> 0,
                'entry_price' => 1.19580,
                'status' => 1,
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
