<?php

namespace Database\Seeders;

use App\Models\Friend;
use Database\Factories\FriendFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            FriendSeeder::class,
        ]);
    }
}
