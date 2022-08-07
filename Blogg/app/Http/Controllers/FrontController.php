<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    private $recentBlogs;
    private $blog;
    private $blogs;
    private $cats;
    private $cat;
    private $img;

    public function index()
    {
        $this->recentBlogs = Blog::where('status',1)->orderBy('id','desc')->take('3')->get();
        return view('front.home.home',['recent_blogs'=>$this->recentBlogs]);
    }
    public function category($id)
    {
        $this->blogs = Blog::where('category_id',$id)->where('status',1)->orderBy('id','desc')->get();
        $this->cats = Category::find($id);
        $this->cat = $this->cats->name;
        $this->img = $this->cats->image;
        return view('front.category.category',['blogs'=>$this->blogs,'name'=>$this->cat,'img'=>$this->img]);

    }
    public function detail($id)
    {
        $this->blog = Blog::find($id);
        return view('front.detail.detail',['blog'=>$this->blog]);
    }
    public function allBlog()
    {
        $this->blogs = Blog::where('status',1)->get();
        return view('front.blog.allBlog',['blogs'=>$this->blogs]);
    }

    public function blogContact()
    {
        return view('front.blog.contact');
    }
}
