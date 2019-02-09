<?php

namespace App\Model\Guru;

use Illuminate\Database\Eloquent\Model;
use App\Model\Pelajaran\MataPelajaran;
use App\User;

class Guru extends Model
{
    protected $fillable = [
    	'nip','kode','nama','user_id'
    ];
    public function mataPelajarans()
    {
    	return $this->belongsToMany(MataPelajaran::class)->withPivot(['hari', 'konsentrasi_id', 'jam']);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
