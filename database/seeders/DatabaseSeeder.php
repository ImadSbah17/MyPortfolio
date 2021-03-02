<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // faire ensuite un php artisan migrate:fresh --seed
        $this->call([
            RoleSeeder::class,
            aboutSeeder::class,
            Contact::class,
        ]);
    }
}
