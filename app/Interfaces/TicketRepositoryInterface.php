<?php

namespace App\Interfaces;


interface TicketRepositoryInterface
{
    public function store(array $data);
}