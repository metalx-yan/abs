<?php

use Illuminate\Database\Seeder;
use App\Model\Pelajaran\TipePelajaran;

class TipePelajaranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipes = [
        	'Jurusan','Umum'
        ];

        foreach ($tipes as $tipe) {
        	TipePelajaran::create([
        		'tipe_pelajaran' => $tipe,
        	]);
        }
    }
}
