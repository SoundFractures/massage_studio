<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{

    //Navigation
    public function home()
    {
        return view('MainSite.index');
    }

    public function omeni()
    {
        return view('MainSite.omeni');
    }

    public function ponudba()
    {
        return view('MainSite.ponudba');
    }

    public function cenik()
    {
        return view('MainSite.cenik');
    }

    public function galerija()
    {
        return view('MainSite.galerija');
    }

    public function blog()
    {
        return view('MainSite.blog');
    }
    
    public function povprasevanje()
    {
        return view('MainSite.povprasevanje');
    }

    

    public function admin()
    {
        return view('ControlPanel.index');
    }

    

    public function subscribers()
    {
        return view('ControlPanel.Views.subscribers');
    }
    
}
