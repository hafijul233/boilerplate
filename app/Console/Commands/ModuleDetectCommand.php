<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ModuleDetectCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'module:generate-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate module status json file from module folder';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $exclude = ['.', '..', '...', '.gitkeep'];

        $moduleLocation = config('modules.paths.modules');

        $modules = [];

        //List all modules in local storage
        foreach (scandir($moduleLocation) as $item) {
            if (!in_array($item, $exclude) && is_dir($moduleLocation . DIRECTORY_SEPARATOR . $item))
                $modules[$item] = true;
        }

        //Create Module Status JSON
        try {
            file_put_contents(base_path('modules_statuses.json'), json_encode($modules, JSON_PRETTY_PRINT));

            $this->info('Module Status Json Created.');

            return Command::SUCCESS;
        } catch (\Exception $exception) {
            $this->error($exception->getMessage());
            return Command::FAILURE;
        }
    }
}
