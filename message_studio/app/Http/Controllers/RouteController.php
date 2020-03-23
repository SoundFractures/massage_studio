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

    public function about()
    {
        return view('MainSite.about');
    }

    public function offer()
    {
        return view('MainSite.offer');
    }

    public function pricelist()
    {
        return view('MainSite.pricelist');
    }

    public function gallery()
    {
        return view('MainSite.gallery');
    }

    public function blog()
    {
        return view('MainSite.blog');
    }
    
    public function contact()
    {
        return view('MainSite.contact');
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
