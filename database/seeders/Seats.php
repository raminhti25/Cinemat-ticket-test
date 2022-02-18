<?php

namespace Database\Seeders;

use App\Models\Seat;
use Illuminate\Database\Seeder;

class Seats extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seat::insert(
            ['number' => 20],
            ['number' => 21],
            ['number' => 22],
            ['number' => 23],
            ['number' => 24],
            ['number' => 25],
            ['number' => 26],
            ['number' => 27],
            ['number' => 28],
            ['number' => 29],
            ['number' => 30]
        );
    }
}
