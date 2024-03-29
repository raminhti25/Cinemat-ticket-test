<?php

namespace App\Providers;

use App\Interfaces\SeatRepositoryInterface;
use App\Interfaces\TicketRepositoryInterface;
use App\Repositories\Eloquent\SeatRepository;
use App\Repositories\Eloquent\TicketRepository;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\MovieRepositoryInterface;
use App\Repositories\Eloquent\MovieRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MovieRepositoryInterface::class, MovieRepository::class);

        $this->app->bind(SeatRepositoryInterface::class, SeatRepository::class);

        $this->app->bind(TicketRepositoryInterface::class, TicketRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
