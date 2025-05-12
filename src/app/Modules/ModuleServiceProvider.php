<?php

namespace App\Modules;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Services\AuthService;

class ModuleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $modulesPath = base_path('app/Modules');
        $modules = array_map('basename', File::directories($modulesPath));
        
        foreach ($modules as $module) {
            $this->registerRoutes($module);
            $this->registerViews($module);
        }
    }

    protected function registerRoutes($module)
    {
        $modulePath = base_path("app/Modules/{$module}");

        // Register API routes
        if (File::exists("{$modulePath}/Routes/api.php")) {
            Route::middleware('api')
                ->prefix('api')
                ->group(function () use ($modulePath) {
                    require "{$modulePath}/Routes/api.php";
                });
        }

        // Register web routes
        if (File::exists("{$modulePath}/Routes/web.php")) {
            Route::middleware('web')
                ->group(function () use ($modulePath) {
                    require "{$modulePath}/Routes/web.php";
                });
        }
    }

    protected function registerViews($module)
    {
        $viewPath = base_path("app/Modules/{$module}/Views");
        
        if (File::isDirectory($viewPath)) {
            // Pass both path and namespace to loadViewsFrom
            $this->loadViewsFrom($viewPath, $module);
        }
    }

    public function register()
    {
        // Register AuthService in the service container
        $this->app->singleton(AuthService::class);
    }
}
