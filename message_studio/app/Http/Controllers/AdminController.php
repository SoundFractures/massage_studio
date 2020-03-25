<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function admin()
    {
        return view('ControlPanel.index');
    }
    
    public function subscribers()
    {
        return view('ControlPanel.Views.Subscribers.index');
    }

    public function settings()
    {
        return view('ControlPanel.Views.Settings.index');
    }

    
}
