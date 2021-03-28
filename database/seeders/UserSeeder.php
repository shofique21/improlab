<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
                'name' => 'Shofique Shahariar',
                'phone' => '01911060225',
				'email' => 'farooq@improlabs.com',
                'password' => bcrypt('12345678')
			]
			
        ]);
    }
}
