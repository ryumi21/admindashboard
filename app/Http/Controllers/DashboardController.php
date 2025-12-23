<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle dynamic layout/sub-layout based on URL
     *
     * @param string|null $layout
     * @param string|null $sub
     */
    public function show()
    {
        return view('dashboard.app');
    }
    public function index()
    {
        return view('dashboard.app');
    }
}
