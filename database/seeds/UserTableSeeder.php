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
        User::create([
            'username' =>'kesiswaan_smkn4',
            'password' =>'kesiswaan1357',
            'role_id'=>1
        ]);

    }
}
