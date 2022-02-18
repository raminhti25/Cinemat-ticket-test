<?php

namespace App\Repositories\Eloquent;

use App\Models\Seat;
use Illuminate\Database\Eloquent\Builder;
use App\Interfaces\SeatRepositoryInterface;

class SeatRepository implements SeatRepositoryInterface
{
    public function showMovieEmptySeats(int $movie_id)
    {
        $seats = Seat::whereDoesntHave('tickets', function (Builder $query) use ($movie_id) {
            $query->where('movie_id', $movie_id);
        });

        $seats = $seats->paginate($data['per_page'] ?? 10, '*', 'page', $data['page'] ?? 1);

        return $seats;
    }
}