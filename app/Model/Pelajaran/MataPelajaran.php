<?php

namespace App\Model\Pelajaran;

use Illuminate\Database\Eloquent\Model;
use App\Model\Guru\Guru;
use App\Model\Absen\Absen;
use App\Model\Kelas\Konsentrasi;
use App\Model\Pelajaran\TipePelajaran;
use Carbon\Carbon;

class MataPelajaran extends Model
{
    protected $fillable = [
    	'kode',
    	'pelajaran',
    	'konsentrasi_id',
        'tipe_pelajaran_id'
    ];
    public function konsentrasis()
    {
    	return $this->belongsToMany(Konsentrasi::class);
    }
    public function tipePelajaran()
    {
        return $this->belongsTo(TipePelajaran::class);
    }
    public function gurus()
    {
        return $this->belongsToMany(Guru::class)->withPivot(['hari', 'jam']);
    }
    public static function hari()
    {
        return ['senin','selasa','rabu','kamis','jumat'];
    }
    public function pertemuans()
    {
        return $this->hasMany(Pertemuan::class);
    }
    public function absenHariIniUntukSiswa($siswa)
    {
        $today = Carbon::now()->format('Y-m-d');
        if ($this->absens()->where('siswa_id', $siswa)->where('created_at', 'like', $today . '%')->first()) {
            return true;
        } else {
            return false;
        }
    }
    public function absenHariIni()
    {
    }
}
