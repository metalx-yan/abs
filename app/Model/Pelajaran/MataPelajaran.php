<?php

namespace App\Model\Pelajaran;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    protected $fillable = [
    	'kode',
    	'name',
    	'total_jam',
    	'tingkatan_id'
    ];
    public function tingkatan()
    {
    	return $this->belongsTo(Tingkatan::class);
    }
    public function jurusans()
    {
        return $this->belongsTo(Jurusan::class);
    }

    
}
