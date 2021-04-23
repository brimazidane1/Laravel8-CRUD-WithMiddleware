<?php

namespace Database\Seeders;

use Database\Factories\UsersFactory;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Users::factory()->count(3)->make();
    }
}
