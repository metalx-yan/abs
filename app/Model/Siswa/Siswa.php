<?php

namespace App\Model\Siswa;

use Illuminate\Database\Eloquent\Model;
use App\Model\Absen\Absen;
use App\Model\Kelas\Konsentrasi;
use App\Model\Absen\Absensi;

class Siswa extends Model
{
    protected $fillable = [
 	   	'nis', 'nama','no_hp_orangtua','id_konsentrasi'
    ];
    public function konsentrasi()
    {
    	return $this->belongsTo(Konsentrasi::class);
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
    public function fullKelas()
    {
        return $this->konsentrasi->jurusan->tingkatan->tingkatan . ' ' .  $this->konsentrasi->konsentrasi . ' ' . $this->konsentrasi->subbagian;
    }
    public function persentaseKetidakhadiran()
    {
        return ($this->absensis->where('keterangan', 'alpha')->count() * 7);
    }
    public function status()
    {
        $status = 'Aman';
        switch ($this->persentaseKetidakhadiran()) {
            case 30:
                $status = 'Peringatan 1';
                break;

            case 50:
                $status = 'Peringatan 2';
                break;

            case 80:
                $status = 'Pemanggilan Orang Tua';
                break;
        }

        return $status;
    }
    public function keterangan()
    {
        $status = 'Aman';
        switch ($this->persentaseKetidakhadiran()) {
            case 30:
                $status = 'Kirim Peringatan 1';
                break;

            case 50:
                $status = 'Kirim Peringatan 2';
                break;

            case 80:
                $status = 'Kirim Pemanggilan Orang Tua';
                break;
        }

        return $status;
    }
    public function smsable()
    {
        return $this->persentaseKetidakhadiran() > 29 ? true : false ;
    }
}
