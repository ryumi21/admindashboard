<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Handle dynamic layout/sub-layout based on URL
     *
     * @param string|null $layout
     * @param string|null $sub
     */
    public function index()
    {
        return view('user.app');
    }
        public function create()
    {
        return view('user.create');
    }
    
}
