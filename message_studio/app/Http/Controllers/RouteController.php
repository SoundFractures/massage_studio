<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function home()
    {
        return view('MainSite.index');
    }

    public function admin()
    {
        return view('ControlPanel.index');
    }

    public function test()
    {
        return view('ControlPanel.Views.test');
    }
    
}
