<?php

namespace App\Model\Absen;

use Illuminate\Database\Eloquent\Model;
use App\Model\Siswa\Siswa;
use App\Model\Kelas\Konsentrasi;
use App\Model\Pelajaran\MataPelajaran;
use App\Model\Absen\Absen;
use App\Model\Absen\Absensi;

class Pertemuan extends Model
{
    protected $fillable = [
    	'pertemuan','konsentrasi_id','mata_pelajaran_id'
    ];
    public function konsentrasi()
    {
    	return $this->belongsTo(Konsentrasi::class);
    }
    public function mata_pelajaran()
    {
    	return $this->belongsTo(Siswa::class);
    }
    public function absens()
    {
        return $this->hasMany(Absen::class);
    }
    public function absensis()
    {
        return $this->hasMany(Absensi::class);
    }
}
