<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTicketRequest;
use App\Interfaces\TicketRepositoryInterface;

class TicketController extends Controller
{
    private $repository;

    public function __construct(TicketRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param CreateTicketRequest $request
     * @param int $movie_id
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function store(CreateTicketRequest $request, int $movie_id)
    {
        $data = $request->all();

        $data['movie_id'] = $movie_id;

        $ticket = $this->repository->store($data);

        return response(['data' => $ticket, 'message' => trans('messages.created')], 201);
    }
}
