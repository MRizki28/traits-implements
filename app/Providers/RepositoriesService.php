<?php

namespace App\Providers;

use App\Interfaces\MahasiswaInterfaces;
use App\Repositories\MahasiswaRepositories;
use Illuminate\Support\ServiceProvider;

class RepositoriesService extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(MahasiswaInterfaces::class, MahasiswaRepositories::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
