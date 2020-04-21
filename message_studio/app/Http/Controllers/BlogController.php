<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Category;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        $categories = Category::all();
        return view('ControlPanel.Views.Blogs.index', ["blogs"=>$blogs,"categories"=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('ControlPanel.Views.Blogs.create', ["categories"=>$categories]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->body =$request->body;
        if($request->hasFile('file')){

            $filename = $request->file->getClientOriginalName();
            $request->file->storeAs('public/images',$filename);
            $blog->file=$filename;
        }
        
        $blog->category_id =$request->category_id;

        $blog->save();
        return redirect('/blogs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        $category = Category::find($blog->category_id);
        return view('ControlPanel.Views.Blogs.show',["blog"=>$blog,"category"=>$category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        $categories = Category::all();
        return view('ControlPanel.Views.Blogs.edit',["blog"=>$blog, "categories"=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       //Validate

       $blog = Blog::find($id);
       $blog->title = $request->title;
       $blog->body = $request->body;
       $blog->category_id = $request->category_id;
       
       if($request->hasFile('file')){
        try {
            unlink(storage_path('app/public/images/'.$blog->file));
        } catch (\Throwable $th) {
            
        }
        $filename = $request->file->getClientOriginalName();
        $request->file->storeAs('public/images',$filename);
        $blog->file=$filename;
    }
       $blog->save();

       return redirect('/blogs/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('/blogs');
    }
}
