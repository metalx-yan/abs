<?php

namespace App\Model\Pelajaran;

use Illuminate\Database\Eloquent\Model;
use App\Model\Guru\Guru;

class MataPelajaran extends Model
{
    protected $fillable = [
    	'kode',
    	'pelajaran',
    	'total_jam',
    	'konsentrasi_id',
        'tipe_pelajaran_id'
    ];
    public function konsentasi()
    {
    	return $this->belongsTo(Konsentasi::class);
    }
    public function tipePelajaran()
    {
        return $this->belongsTo(TipePelajaran::class);
    }
    public function gurus()
    {
        return $this->belongsToMany(Guru::class);
    }
    public static function hari()
    {
        return ['senin','selasa','rabu','kamis','jumat'];
    }
}
