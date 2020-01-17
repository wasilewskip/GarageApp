<?php

namespace App\Authentication;

use App\Repair;
use App\Role;
use App\Vehicle;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }

    public function repairs()
    {
        return $this->hasMany(Repair::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
