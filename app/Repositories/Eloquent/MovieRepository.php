<?php

namespace App\Repositories\Eloquent;


use App\Models\Movie;
use App\Interfaces\MovieRepositoryInterface;

class MovieRepository implements MovieRepositoryInterface
{

    public function index(array $data)
    {
        $movies = Movie::paginate($data['per_page'] ?? 10, '*', 'page', $data['page'] ?? 1);

        return $movies;
    }
}