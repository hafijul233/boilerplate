<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Auth\Database\Seeders\AuthDatabaseSeeder;
use Modules\Contact\Database\Seeders\ContactDatabaseSeeder;
use Modules\Contact\Database\Seeders\Setting\CitySeeder;
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
/*        $this->call(CoreDatabaseSeeder::class);
        $this->call(AuthDatabaseSeeder::class);
        $this->call(ContactDatabaseSeeder::class);*/
        $this->call(CitySeeder::class);
    }
}
