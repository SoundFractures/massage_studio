<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Category;

class RouteController extends Controller
{

    
    public function home()
    {

        $blogs = Blog::orderBy('created_at')->take(3)->get();
        return view('MainSite.index', ["blogs"=>$blogs]);

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
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(6);
        $categories = Category::all();
        return view('MainSite.blog', ["blogs"=>$blogs,"categories"=>$categories]);
      
    }
    

    public function blog_article($id)
    {
        $blog = Blog::find($id);
        $category = Category::find($blog->category_id);
        return view('MainSite.blog_article',["blog"=>$blog,"category"=>$category]);
    }

    public function contact()
    {
        return view('MainSite.contact');
    }



    public function cookies()
    {
        return view('MainSite.cookies');
    }

    
    
    
    
}
