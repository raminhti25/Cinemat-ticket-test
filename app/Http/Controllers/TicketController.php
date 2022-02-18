<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\TicketRepositoryInterface;

class TicketController extends Controller
{
    private $repository;

    public function __construct(TicketRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param Request $request
     */
    public function store(Request $request)
    {
        $ticket = $this->repository->store($request->all());
    }
}
