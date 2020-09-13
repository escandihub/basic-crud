<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FriendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('friends')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'phone' => 9612954393,
                'mood' => 'Ganas de Caldear'
            ]);
        }

    }
}
