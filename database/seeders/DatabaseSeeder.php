<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create(['name' => 'admin', 'email' => 'admin@admin.com', 'password' => 'AdminPassword', 'role' => 'admin']);

        $this->call([
            DiceSeeder::class,
            DareSeeder::class,
            QuestionSeeder::class,
            CoupleHotSeeder::class,
            CoupleSoftSeeder::class,
        ]);
    }
}
