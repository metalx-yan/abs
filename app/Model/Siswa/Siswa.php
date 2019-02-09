<?php

namespace App\Model\Siswa;

use Illuminate\Database\Eloquent\Model;
use App\Model\Absen\Absen;

class Siswa extends Model
{
    protected $fillable = [
 	   	'nis', 'nama','no_hp_orangtua','id_konsentrasi'
    ];
    public function konsentrasi()
    {
    	return $this->belongsTo(konsentrasi::class);
    }
    public function pertemuans()
    {
    	return $this->hasMany(Pertemuan::class);
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
