<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Module Namespace
    |--------------------------------------------------------------------------
    |
    | Default module namespace.
    |
    */

    'namespace' => 'Modules',

    /*
    |--------------------------------------------------------------------------
    | Module Stubs
    |--------------------------------------------------------------------------
    |
    | Default module stubs.
    |
    */

    'stubs' => [
        'enabled' => true,
        'path' => base_path() . '/stubs/module',
        'files' => [
            'routes/web' => 'Routes/web.php',
            'routes/api' => 'Routes/api.php',
            'views/index' => 'Resources/views/index.blade.php',
            'views/master' => 'Resources/views/layouts/master.blade.php',
            'scaffold/config' => 'Config/config.php',
            'composer' => 'composer.json',
            'assets/js/app' => 'Resources/assets/js/app.js',
            'assets/sass/app' => 'Resources/assets/sass/app.scss',
            'webpack' => 'webpack.mix.js',
            'package' => 'package.json',
        ],
        'replacements' => [
            'routes/web' => ['LOWER_NAME', 'STUDLY_NAME'],
            'routes/api' => ['LOWER_NAME'],
            'webpack' => ['LOWER_NAME'],
            'json' => ['LOWER_NAME', 'STUDLY_NAME', 'MODULE_NAMESPACE', 'PROVIDER_NAMESPACE'],
            'views/index' => ['LOWER_NAME'],
            'views/master' => ['LOWER_NAME', 'STUDLY_NAME'],
            'scaffold/config' => ['STUDLY_NAME'],
            'composer' => [
                'LOWER_NAME',
                'STUDLY_NAME',
                'VENDOR',
                'AUTHOR_NAME',
                'AUTHOR_EMAIL',
                'MODULE_NAMESPACE',
                'PROVIDER_NAMESPACE',
            ],
        ],
        'gitkeep' => true,
    ],
    'paths' => [
        /*
        |--------------------------------------------------------------------------
        | Modules path
        |--------------------------------------------------------------------------
        |
        | This path used for save the generated module. This path also will be added
        | automatically to list of scanned folders.
        |
        */

        'modules' => base_path('modules'),
        /*
        |--------------------------------------------------------------------------
        | Modules assets path
        |--------------------------------------------------------------------------
        |
        | Here you may update the modules assets path.
        |
        */

        'assets' => public_path('modules'),
        /*
        |--------------------------------------------------------------------------
        | The migrations path
        |--------------------------------------------------------------------------
        |
        | Where you run 'module:publish-migration' command, where do you publish the
        | the migration files?
        |
        */

        'migration' => base_path('database/migrations'),
        /*
        |--------------------------------------------------------------------------
        | Generator path
        |--------------------------------------------------------------------------
        | Customise the paths where the folders will be generated.
        | Set the generate key to false to not generate that folder
        */
        'generator' => [
            'config' => ['path' => 'Config', 'generate' => true],
            'command' => ['path' => 'Console', 'generate' => true],
            'migration' => ['path' => 'Database/Migrations', 'generate' => true],
            'seeder' => ['path' => 'Database/Seeders', 'generate' => true],
            'factory' => ['path' => 'Database/factories', 'generate' => true],
            'model' => ['path' => 'Models', 'generate' => true],
            'routes' => ['path' => 'Routes', 'generate' => true],
            'controller' => ['path' => 'Http/Controllers', 'generate' => true],
            'filter' => ['path' => 'Http/Middleware', 'generate' => true],
            'request' => ['path' => 'Http/Requests', 'generate' => true],
            'provider' => ['path' => 'Providers', 'generate' => true],
            'assets' => ['path' => 'Resources/assets', 'generate' => true],
            'lang' => ['path' => 'Resources/lang', 'generate' => true],
            'views' => ['path' => 'Resources/views', 'generate' => true],
            'test' => ['path' => 'Tests/Unit', 'generate' => true],
            'test-feature' => ['path' => 'Tests/Feature', 'generate' => true],
            'repository' => ['path' => 'Repositories', 'generate' => true],
            'event' => ['path' => 'Events', 'generate' => true],
            'listener' => ['path' => 'Listeners', 'generate' => true],
            'policies' => ['path' => 'Policies', 'generate' => false],
            'rules' => ['path' => 'Rules', 'generate' => false],
            'jobs' => ['path' => 'Jobs', 'generate' => false],
            'emails' => ['path' => 'Mails', 'generate' => true],
            'notifications' => ['path' => 'Notifications', 'generate' => true],
            'resource' => ['path' => 'Transformers', 'generate' => false],
            'component-view' => ['path' => 'Resources/views/components', 'generate' => false],
            'component-class' => ['path' => 'View/Component', 'generate' => false],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Package commands
    |--------------------------------------------------------------------------
    |
    | Here you can define which commands will be visible and used in your
    | application. If for example you don't use some of the commands provided
    | you can simply comment them out.
    |
    */
    'commands' => [
        \Nwidart\Modules\Commands\CommandMakeCommand::class,
        \Nwidart\Modules\Commands\ControllerMakeCommand::class,
        \Nwidart\Modules\Commands\DisableCommand::class,
        \Nwidart\Modules\Commands\DumpCommand::class,
        \Nwidart\Modules\Commands\EnableCommand::class,
        \Nwidart\Modules\Commands\EventMakeCommand::class,
        \Nwidart\Modules\Commands\JobMakeCommand::class,
        \Nwidart\Modules\Commands\ListenerMakeCommand::class,
        \Nwidart\Modules\Commands\MailMakeCommand::class,
        \Nwidart\Modules\Commands\MiddlewareMakeCommand::class,
        \Nwidart\Modules\Commands\NotificationMakeCommand::class,
        \Nwidart\Modules\Commands\ProviderMakeCommand::class,
        \Nwidart\Modules\Commands\RouteProviderMakeCommand::class,
        \Nwidart\Modules\Commands\InstallCommand::class,
        \Nwidart\Modules\Commands\ListCommand::class,
        \Nwidart\Modules\Commands\ModuleDeleteCommand::class,
        \Nwidart\Modules\Commands\ModuleMakeCommand::class,
        \Nwidart\Modules\Commands\FactoryMakeCommand::class,
        \Nwidart\Modules\Commands\PolicyMakeCommand::class,
        \Nwidart\Modules\Commands\RequestMakeCommand::class,
        \Nwidart\Modules\Commands\RuleMakeCommand::class,
        \Nwidart\Modules\Commands\MigrateCommand::class,
        \Nwidart\Modules\Commands\MigrateRefreshCommand::class,
        \Nwidart\Modules\Commands\MigrateResetCommand::class,
        \Nwidart\Modules\Commands\MigrateRollbackCommand::class,
        \Nwidart\Modules\Commands\MigrateStatusCommand::class,
        \Nwidart\Modules\Commands\MigrationMakeCommand::class,
        \Nwidart\Modules\Commands\ModelMakeCommand::class,
        \Nwidart\Modules\Commands\PublishCommand::class,
        \Nwidart\Modules\Commands\PublishConfigurationCommand::class,
        \Nwidart\Modules\Commands\PublishMigrationCommand::class,
        \Nwidart\Modules\Commands\PublishTranslationCommand::class,
        \Nwidart\Modules\Commands\SeedCommand::class,
        \Nwidart\Modules\Commands\SeedMakeCommand::class,
        \Nwidart\Modules\Commands\SetupCommand::class,
        \Nwidart\Modules\Commands\UnUseCommand::class,
        \Nwidart\Modules\Commands\UpdateCommand::class,
        \Nwidart\Modules\Commands\UseCommand::class,
        \Nwidart\Modules\Commands\ResourceMakeCommand::class,
        \Nwidart\Modules\Commands\TestMakeCommand::class,
        \Nwidart\Modules\Commands\LaravelModulesV6Migrator::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Scan Path
    |--------------------------------------------------------------------------
    |
    | Here you define which folder will be scanned. By default will scan vendor
    | directory. This is useful if you host the package in packagist website.
    |
    */

    'scan' => [
        'enabled' => false,
        'paths' => [
            base_path('vendor/*/*'),
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Composer File Template
    |--------------------------------------------------------------------------
    |
    | Here is the config for composer.json file, generated by this package
    |
    */

    'composer' => [
        'vendor' => 'hafijul233',
        'author' => [
            'name' => 'Hafijul Islam',
            'email' => 'hafijul233@gmail.com',
        ],
    ],

    'composer-output' => false,

    /*
    |--------------------------------------------------------------------------
    | Caching
    |--------------------------------------------------------------------------
    |
    | Here is the config for setting up caching feature.
    |
    */
    'cache' => [
        'enabled' => false,
        'key' => 'laravel-modules',
        'lifetime' => 60,
    ],
    /*
    |--------------------------------------------------------------------------
    | Choose what laravel-modules will register as custom namespaces.
    | Setting one to false will require you to register that part
    | in your own Service Provider class.
    |--------------------------------------------------------------------------
    */
    'register' => [
        'translations' => true,
        /**
         * load files on boot or register method
         *
         * Note: boot not compatible with asgardcms
         *
         * @example boot|register
         */
        'files' => 'register',
    ],

    /*
    |--------------------------------------------------------------------------
    | Activators
    |--------------------------------------------------------------------------
    |
    | You can define new types of activators here, file, database etc. The only
    | required parameter is 'class'.
    | The file activator will store the activation status in storage/installed_modules
    */
    'activators' => [
        'file' => [
            'class' => \Nwidart\Modules\Activators\FileActivator::class,
            'statuses-file' => base_path('modules_statuses.json'),
            'cache-key' => 'activator.installed',
            'cache-lifetime' => 604800,
        ],
    ],

    'activator' => 'file',
];
