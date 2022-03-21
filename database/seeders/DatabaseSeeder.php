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
        $this->call(PostCategoriesTableSeeder::class);
        $this->call(AttributesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(DevicesTableSeeder::class);
        $this->call(StatisticsTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(TechnicaldatasTableSeeder::class);
        $this->call(DeviceStatisticsTableSeeder::class);
    }
}
