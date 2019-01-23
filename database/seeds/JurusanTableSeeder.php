<?php

use Illuminate\Database\Seeder;
use App\Model\Kelas\Jurusan;

class JurusanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $jurusan  = [
       		'Teknik Geomatika dan Geospasial',
       		'Teknik Konstruksi dan Properti',
       		'Teknik Ketenagalistrikan',
       		'Teknik Mesin',
          'Teknik Komputer dan Informatika'
       ];

       foreach ($jurusan as $key => $jur) {
       		for ($i=1; $i <= 3; $i++) { 
              Jurusan::create([
                'Jurusan'=>$jur,
                'tingkatan_id'=> $i
              ]);
          }
       }
    }
}
