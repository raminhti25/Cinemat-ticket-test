<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class Movies extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::insert(
            ['title' => 'Children of heaven', 'release_year' => 1997, 'play_time' => '2018-04-20 22:00'],
            ['title' => 'About Elly', 'release_year' => 2009, 'play_time' => '2018-04-20 20:00'],
            ['title' => 'A separation', 'release_year' => 2011, 'play_time' => '2018-04-22 18:00'],
            ['title' => 'The salesman', 'release_year' => 2016, 'play_time' => '2018-04-21 18:00'],
            ['title' => 'The Elephant king', 'release_year' => 2017, 'play_time' => '2018-04-21 20:00']
        );
    }
}
