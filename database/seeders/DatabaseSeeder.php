<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Myblog;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Myblog::factory(5)->create();
    }
}
