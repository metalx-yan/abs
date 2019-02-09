<?php

namespace App\Model\Absen;

use Illuminate\Database\Eloquent\Model;
use App\Model\Siswa\Siswa;
use App\Model\Absen\Pertemuan;

class Absensi extends Model
{
    protected $fillable = [
    	'keterangan','siswa_id','pertemuan_id'
    ];
    public function Siswa()
    {
    	return $this->belongsTo(Siswa::class);
    }
    public function pertemuan()
    {
    	return $this->belongsTo(Pertemuan::class);
    }
}
