<?php

namespace App\Interfaces;


interface SeatRepositoryInterface
{
    public function showMovieEmptySeats(int $movie_id);

    public function showReservedSeats();
}