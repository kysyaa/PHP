<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        News::factory(10)->create();
    }
}
