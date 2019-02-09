<?php

namespace App\Model\Absen;

use Illuminate\Database\Eloquent\Model;
use App\Model\Siswa\Siswa;
use App\Model\Absen\Pertemuan;

class Absen extends Model
{
    protected $fillable = [
		'siswa_id','pertemuan_id'
    ];
       
    public function siswa()
    {
    	return $this->belongsTo(Siswa::class);
    }
    public function pertemuan()
    {
    	return $this->belongsTo(Pertemuan::class);
    }
}
