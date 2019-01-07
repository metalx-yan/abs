<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kesiswaan = factory(User::class)->create([
        	'role_id' => 1,
        ]);

    }
}
