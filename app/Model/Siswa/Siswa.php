<?php

namespace App\Model\Siswa;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
 	   	'nis', 'nama','no_hp_orangtua','id_konsentrasi'
    ];
    public function konsentrasi()
    {
    	return $this->belongsTo(konsentrasi::class);
    }
}
