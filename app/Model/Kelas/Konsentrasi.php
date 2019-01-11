<?php

namespace App\Model\Kelas;

use Illuminate\Database\Eloquent\Model;
use App\Model\Siswa\Siswa;

class Konsentrasi extends Model
{
    protected $fillable = [
    	'konsentrasi'
    ];
    public function jurusan()
    {
    	return $this->belongsTo(Jurusan::class);
    }

    public function siswas ()
    {
    	return $this->hasMany(Siswa::class);
    }
    public function mata_pelajarans()
    {
        return $this->hasMany(MataPelajaran::class);
    }

}
