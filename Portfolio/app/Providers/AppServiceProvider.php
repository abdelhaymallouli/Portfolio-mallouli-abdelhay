<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\DeveloperService;

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
    
    public function boot(DeveloperService $developerService)
{
    $profile = $developerService->getProfile();
    view()->share('profile', $profile);
}
}
