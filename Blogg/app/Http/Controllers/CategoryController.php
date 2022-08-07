<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categories;
    protected $category;
    public function index()
    {
        return view('admin.category.add');
    }

    public function create(Request $request)
    {
        Category::newCategory($request);
        return redirect()->back()->with('message','Category info create successfully.');
    }
    public function manage()
    {
        $this->categories = Category::orderBy('id','DESC')->get();
        return view('admin.category.manage',['categories'=>$this->categories]);
    }
    public function edit($id)
    {
        $this->category = Category::find($id);
        return view('admin.category.edit',['category'=>$this->category]);
    }
    public function update(Request $request, $id)
    {
        Category::updateCategory($request, $id);
        return redirect('/manage-category')->with('message','Edit successfully.');
    }
    public function delete($id)
    {
        $this->category = Category::find($id);
        if (file_exists($this->category->image))
        {
            unlink($this->category->image);
        }
        $this->category ->delete();
        return redirect()->back()->with('message','delete row successfully.');
    }
    public function updateStatus($id)
    {
        $this->category=Category::find($id);
        if ($this->category->status == 1)
        {
            $this->category->status = 0;
            $this->message = 'Blocg Status info Unpublished successfully';
        }
        else
        {
            $this->category->status = 1;
            $this->message = 'Blog Status info published successfully';
        }
        $this->category->save();
        return redirect('manage-category')->with('message',$this->message);
    }
}


