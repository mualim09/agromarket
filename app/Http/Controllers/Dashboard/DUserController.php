<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DUserController extends Controller
{
    public function index()
    {
        return view('dashboard.dashboard-user');
    }

    public function admin()
    {
        return view('dashboard.dashboard-admin');
    }

    public function seller()
    {
        return view('dashboard.dashboard-user');
    }
}