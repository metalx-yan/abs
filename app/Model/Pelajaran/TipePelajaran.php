<?php

namespace App\Model\Pelajaran;

use Illuminate\Database\Eloquent\Model;

class TipePelajaran extends Model
{
    protected $fillable = [
		'tipe_pelajaran'
    ];

    public function mataPelajarans()
    {
    	return $this->hasMany(MataPelajaran::class);
    }
}
