<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Hash;
use App\Model\Guru\Guru;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','password','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function kesiswaan()
    {
        return $this->hasOne(kesiswaan::class);
    }

    public function hasRole($params)
    {
        $role = Role::where('name', $params)->first();
        return $this->role == $role;
    }
    public function guru()
    {
        return $this->hasOne(Guru::class);
    }    
}
