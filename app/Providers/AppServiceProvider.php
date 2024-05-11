<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\View\Components\AdminDashboard\AdminNavigation;
use App\View\Components\AdminDashboard\AdminHeader;
use App\View\Components\AdminDashboard\AdminSidebar;
use App\View\Components\AdminDashboard\AdminSwitcher;
use Illuminate\Support\Facades\View;
use App\Models\SiteConfiguration;

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

        // passing data to footer 
        View::composer('layouts.web.footer', function ($view) {
            // Retrieve data from SiteConfiguration
            $footerData = SiteConfiguration::all();
            // Pass the data to the view
            $view->with('SiteConfiguration', $footerData);
        }); 
        View::composer('layouts.web.header', function ($view) {
            // Retrieve data from SiteConfiguration
            $HeaderData = SiteConfiguration::all();
            // Pass the data to the view
            $view->with('SiteConfiguration', $HeaderData);
        }); 
    }
}
