<?php

namespace App\Model\Pelajaran;

use Illuminate\Database\Eloquent\Model;

class TipePelajaran extends Model
{
    protected $fillable = [
		'name','slug'
    ];
}
