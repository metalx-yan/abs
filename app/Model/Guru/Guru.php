<?php

namespace App\Model\Guru;

use Illuminate\Database\Eloquent\Model;
use App\Model\Pelajaran\MataPelajaran;

class Guru extends Model
{
    protected $fillable = [
    	'nip','kode','nama'
    ];
    public function mataPelajarans()
    {
    	return $this->belongsToMany(MataPelajaran::class)->withPivot('hari');
    }
}
