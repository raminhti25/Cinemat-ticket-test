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
        User::create(['name' => 'Ramin Heshmati', 'email' => 'raminhti@gmail.com', 'mobile' => '09361550458', 'password' => '124578']);
    }
}
