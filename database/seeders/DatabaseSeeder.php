<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\EnlistmentType;
use App\Models\Gender;
use App\Models\Rank;
use App\Models\User;
use bfinlay\SpreadsheetSeeder\SpreadsheetSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            FormationSeeder::class,
            RankSeeder::class,
            GenderSeeder::class,
            EnlistmentTypeSeeder::class,
            SpreadsheetSeeder::class,
            AdminSeeder::class,
        ]);
    }
}
