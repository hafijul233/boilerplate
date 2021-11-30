<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Nwidart\Modules\Facades\Module;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Module::macro('enabled', function (string $moduleName) {

            $moduleName = ucwords($moduleName);

            $activeModules = array_keys(Module::allEnabled()); //1 for active, 0 for de-active

            return in_array($moduleName, $activeModules);
        });
    }
}
