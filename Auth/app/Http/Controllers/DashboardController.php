<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class DashboardController extends Controller
{
    /**
     * index
     */
    public function index()
    {
        return view('admin.dashboard.index');
    }
}