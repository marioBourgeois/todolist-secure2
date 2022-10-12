<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        $taches = auth()->user()->taches;

        
        return view('dashboard', compact('taches'));
    }
}
