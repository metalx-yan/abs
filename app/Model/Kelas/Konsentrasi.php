<?php

namespace App\Model\Kelas;

use Illuminate\Database\Eloquent\Model;

class Konsentrasi extends Model
{
    protected $fillable = [
    	'Konsentrasi'
    ];
    public function jurusan()
    {
    	return $this->belongTo(Jurusan::class);
    }

}
