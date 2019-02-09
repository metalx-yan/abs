<?php

namespace App\Model\Kelas; 

use Illuminate\Database\Eloquent\Model;
use App\Model\Siswa\Siswa;
use App\Model\Absen\Absen;
use App\Model\Absen\Pertemuan;
use App\Model\Pelajaran\MataPelajaran;

class Konsentrasi extends Model
{ 
    protected $fillable = [
    	'konsentrasi','subbagian'
    ];
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
    public function mata_pelajarans()
    {
    	return $this->belongsToMany(MataPelajaran::class)->withPivot(['tahun_awal', 'tahun_akhir']);
    }
    public function siswas()
    {
    	return $this->hasMany(Siswa::class);
    }
    public function pertemuans()
    {
        return $this->hasMany(Pertemuan::class);
    }
}
