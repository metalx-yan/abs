<?php

namespace App\Model\Kelas;

use Illuminate\Database\Eloquent\Model;


class Jurusan extends Model
{
    protected $fillable = [
    	'jurusan','tingkatan_id'
    ];
    public function tingkatan()
    {
    	return $this->belongsTo(Tingkatan::class);
    }
    public function konsentrasis()
    {
        return $this->hasMany(Konsentrasi::class);
    }
    public function mata_pelajarans()
    {
        return $this->hasMany(MataPelajaran::class);
    }
}
