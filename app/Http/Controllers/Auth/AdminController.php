<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Authentication\Admin;
use App\Authentication\User;

class AdminController extends Controller
{
    public function showUsers()
    {
        Admin::findOrFail(Auth::id());

        return User::all();
    }
}