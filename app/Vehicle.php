<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Authentication\User;

class Vehicle extends Model
{
    public function owner()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function repairs()
    {
        return $this->hasMany(Repair::class);
    }
}
