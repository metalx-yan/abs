<?php

namespace App\Model\Kelas;

use Illuminate\Database\Eloquent\Model;

class Tingkatan extends Model
{
   protected $fillable = [
   		'tingkatan'
   ];

   public function jurusans()
   {
   		return $this->hasMany(Jurusan::class);
   }

}	
