<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use App\Repositories\ContactRepositoryInterface;
use App\Repositories\ContactRepository;
class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(ContactRepositoryInterface::class, ContactRepository::class);
    }
}
