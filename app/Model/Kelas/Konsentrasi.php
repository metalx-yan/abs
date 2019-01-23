<?php

namespace App\Model\Kelas;

use Illuminate\Database\Eloquent\Model;
use App\Model\Siswa\Siswa;

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
    	return $this->belongsTo(MataPelajaran::class);
    }
    public function siswas()
    {
    	return $this->hasMany(Siswa::class);
    }

}
