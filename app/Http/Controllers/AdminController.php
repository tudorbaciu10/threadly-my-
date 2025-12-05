<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $usersCount = User::count();
        $recentUsers = User::latest()->take(5)->get();

        return view('admin.dashboard', compact('usersCount', 'recentUsers'));
    }
}
