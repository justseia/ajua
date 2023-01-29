<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
         \App\Models\User::factory(20)->create();
         \App\Models\Holiday::factory(20)->create();
         \App\Models\Koran::factory(20)->create();
         \App\Models\Zikr::factory(20)->create();
         \App\Models\News::factory(20)->create();
    }
}
