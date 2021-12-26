<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Auth\Database\Seeders\AuthDatabaseSeeder;
use Modules\Contact\Database\Seeders\ContactDatabaseSeeder;
use Modules\Core\Database\Seeders\CoreDatabaseSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
                $this->call(CoreDatabaseSeeder::class);
                $this->call(AuthDatabaseSeeder::class);
                $this->call(ContactDatabaseSeeder::class);
    }
}
