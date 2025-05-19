<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $modules = $this->getModules();
        foreach ($modules as $module) {
            $interface = "App\\Modules\\{$module}\\Repositories\\{$module}RepositoryInterface";
            $repository = "App\\Modules\\{$module}\\Repositories\\{$module}Repository";
            $this->app->bind($interface, $repository);
        }
    }

    private function getModules(): array
    {
        $modulePaths = app_path('Modules');
        $modules = [];
        if (file_exists($modulePaths)) {
            $dirs = scandir($modulePaths);
            foreach ($dirs as $module) {
                if (is_dir($modulePaths . '/' . $module) && $module !== '.' && $module !== '..') {
                    $modules[] = $module;
                }
            }
        }
        return $modules;
    }
}
