<?php

namespace App\Model\Absen;

use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    protected $fillable = [
    	'keterangan','siswa_id','konsentrasi_id'
    ];
    
}
