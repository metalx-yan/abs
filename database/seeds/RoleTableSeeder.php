<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
        	'kesiswaan',
        	'guru',
        	'wali_kelas',
        ];

        foreach ($roles as $role) {
        	Role::create([
        		'name' => $role
        	]);
        }
    }
}
