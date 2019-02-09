<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Kelas\Tingkatan;
use App\Model\Kelas\Jurusan;
use App\Model\Absen\Absen;
use App\Model\Kelas\Konsentrasi;
use App\Model\Pelajaran\MataPelajarab;
use App\Model\Siswa\Siswa;

class ApiController extends Controller
{
    public function jurusans($tingkatan)
    {
    	$tingkatan = Tingkatan::find($tingkatan);
    	return response()->json($tingkatan->jurusans);
    }

    public function konsentrasis($jurusan)
    {
    	$jurusan = Jurusan::find($jurusan);
    	return response()->json($jurusan->konsentrasis);
    }

    public function absen($konsentrasi, $mapel, $siswa)
    {
        $pertemuan = Siswa::find($siswa)->absens->count() + 1;
        $absen = Absen::create([
            'pertemuan' => $pertemuan,
            'siswa_id' => $siswa,
            'konsentrasi_id' => $konsentrasi,
            'mata_pelajaran_id' => $mapel
        ]);
        return response()->json($absen);
    }
}
