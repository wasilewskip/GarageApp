<?php

namespace App\Authentication;

use App\Authentication\User;
use Illuminate\Database\Eloquent\Builder;

class Employee extends User
{
    protected $table = 'users';

    const EMPLOYEE = 'employee';
    
    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('is_employee', function (Builder $builder) {
            $builder->whereHas('role', function (Builder $query){
                $query->where('role', 'like', self::EMPLOYEE);
            });
        });
    }
}