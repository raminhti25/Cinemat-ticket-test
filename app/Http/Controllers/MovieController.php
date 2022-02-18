<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\MovieRepositoryInterface;

class MovieController extends Controller
{
    private $repository;

    public function __construct(MovieRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $movies = $this->repository->index($request->all());

        return response($movies);
    }
}
