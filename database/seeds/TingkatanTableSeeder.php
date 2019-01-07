<?php

use Illuminate\Database\Seeder;
use App\Model\Kelas\Tingkatan;

class TingkatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tingkatan = [
        	'11','12','13'
        ];

        foreach ($tingkatan as $ting) {
        	Tingkatan::create([
        		'tingkatan'=> $ting
        	]);
        }
    }
}
