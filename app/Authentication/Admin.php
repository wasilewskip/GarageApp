<?php

namespace App\Authentication;

use App\Authentication\User;
use Illuminate\Database\Eloquent\Builder;

class Admin extends User
{
    protected $table = 'users';

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('is_admin', function (Builder $builder) {
            $builder->where('is_admin', '=', true);
        });
    }

    public function getAllUsers()
    {
        $users = User::all();
        $admins = $this->all();

        $mergedUsers = $users->merge($admins);

        return $mergedUsers;
    }
}