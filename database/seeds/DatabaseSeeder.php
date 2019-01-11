<?php

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
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(TingkatanTableSeeder::class);
        $this->call(JurusanTableSeeder::class);
        $this->call(TipePelajaranTableSeeder::class);
    }
}
