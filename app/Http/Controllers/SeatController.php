<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\SeatRepositoryInterface;

class SeatController extends Controller
{
    private $repository;

    public function __construct(SeatRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param Request $request
     * @param int $movie_id
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function showMovieEmptySeats(Request $request, int $movie_id)
    {
        $seats = $this->repository->showMovieEmptySeats($movie_id);

        return response($seats);
    }

    /**
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function showReservedSeats()
    {
        $seats = $this->repository->showReservedSeats();

        return response($seats);
    }
}
