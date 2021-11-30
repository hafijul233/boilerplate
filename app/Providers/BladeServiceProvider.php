<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
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
        Blade::directive('module', function ($moduleName) {
            return '<?php if(\Nwidart\Modules\Facades\Module::enabled(' . $moduleName . ')): ?>';
        });

        Blade::directive('endmodule', function ($moduleName) {
            return '<?php endif; ?>';
        });

    }
}
