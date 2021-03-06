<?php

namespace App\Authentication;

use App\Authentication\User;
use Illuminate\Database\Eloquent\Builder;

class Admin extends User
{
    protected $table = 'users';

    const ADMIN = 'admin';
    
    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('is_admin', function (Builder $builder) {
            $builder->whereHas('role', function (Builder $query){
                $query->where('role', 'like', self::ADMIN);
            });
        });
    }
}