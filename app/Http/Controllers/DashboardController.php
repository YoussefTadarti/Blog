<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }
    public function login()
    {
        return view('dashboard.login');
    }
}
