<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Authentication\Admin;

class AdminController extends Controller
{
    public function showUsers()
    {
        $admin = Admin::findOrFail(Auth::id());

        return $admin->getAllUsers();
    }
}