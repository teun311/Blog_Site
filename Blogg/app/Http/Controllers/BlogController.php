<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blog;
    private $blogs;
    private $categories;
    private $message;

    public function index()
    {
        $this->categories =Category::where('status',1)->get();
        return view('admin.blog.add',['categoriess'=>$this->categories]);
    }
    public function create(Request $request)
    {
        Blog::newBlog($request);
        return redirect()->back()->with('message','Blog info created successfully.');
    }
    public function manage()
    {
        $this->blogs =Blog::orderBy('id','desc')->get();
        return view('admin.blog.manage', ['blogs'=>$this->blogs] );
    }
    public function detail($id)
    {
        $this->blog =Blog::find($id);
        return view('admin.blog.detail',['blog'=>$this->blog] );
    }
    public function edit($id)
    {
        $this->blog =Blog::find($id);
        $this->categories =Category::all();
        return view('admin.blog.edit',['blog'=>$this->blog, 'categories'=>$this->categories]);
    }
    public function update(Request $request, $id)
    {
        Blog::updateBlog($request, $id);
        return redirect('/manage-blog')->with('message','Blog Info Update successfully.');
    }
    public function delete($id)
    {
        $this->blog =Blog::find($id);

           if(file_exists($this->blog->image))
           {
               unlink($this->blog->image);
           }
           $this->blog->delete();
        return redirect()->back()->with('message','delete Blog successfully.');
    }
    public function updateStatus($id)
    {
        $this->blog =Blog::find($id);
        if ($this->blog->status == 1)
        {
            $this->blog->status = 0;
            $this->message = 'Blocg Status info Unpublished successfully';
        }
        else
        {
            $this->blog->status = 1;
            $this->message = 'Blog Status info published successfully';
        }
        $this->blog->save();
        return redirect('manage-blog')->with('message',$this->message);
    }
}
