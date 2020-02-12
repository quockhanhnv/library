<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
    	//dd(Auth::user()->name)
    	return view('layouts.metronictheme');
    }
}
