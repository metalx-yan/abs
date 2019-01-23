<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kesiswaan extends Model
{
    protected $fillable = [
    	'nip','nama', 'user_id'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
