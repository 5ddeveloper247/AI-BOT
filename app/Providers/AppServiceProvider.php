<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\View\Components\AdminDashboard\AdminNavigation;
use App\View\Components\AdminDashboard\AdminHeader;
use App\View\Components\AdminDashboard\AdminSidebar;
use App\View\Components\AdminDashboard\AdminSwitcher;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */


public function boot()
{
    Blade::component('admin-navigation', AdminNavigation::class);
    Blade::component('admin-header', AdminHeader::class);
      Blade::component('admin-sidebar', AdminSidebar::class);
      Blade::component('admin-adminswitcher', AdminSwitcher::class);

}
}
