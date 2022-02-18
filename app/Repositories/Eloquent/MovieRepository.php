<?php

namespace App\Repositories\Eloquent;

use App\Models\Movie;
use App\Traits\ApiTrait;
use App\Interfaces\MovieRepositoryInterface;

class MovieRepository implements MovieRepositoryInterface
{
    use ApiTrait;

    public function index(array $data)
    {
        $request = $this->prepareApiRequest($data);

        $movies = Movie::paginate($request->per_page, '*', 'page', $request->page);

        return $movies;
    }
}