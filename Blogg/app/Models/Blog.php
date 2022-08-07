<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;


class Blog extends Model
{
    use HasFactory;

    private static $blog;
    private static $image;
    private static $imageName;
    private static $imageUrl;
    private static $directory;


    public static function getImg($request, $dir=null)
    {
        self::$image     = $request->file('image');
        if (self::$image)
        {
            self::$imageName =  time().rand(10,100).'.'. self::$image->getClientOriginalExtension();
            self::$imageUrl  ='blog/image/';
            self::$image->move(self::$imageUrl,self::$imageName);
            self::$directory = self::$imageUrl.self::$imageName;
            return self::$directory;
        }
        else return $dir;

    }

    public static function newBlog($request)
    {
        self::$blog  = new Blog();
        self::$blog->category_id        = $request->category_id;
        self::$blog->author_id          = Auth::user()->id;
        self::$blog->main_title         = $request->main_title;
        self::$blog->sub_title          = $request->main_title;
        self::$blog->short_description  = $request->short_description;
        self::$blog->long_description   = $request->long_description;
        self::$blog->image              = self::getImg($request);
        self::$blog->save();
    }


    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public  function author()
    {
        return $this->belongsTo('App\Models\User');
    }
    public static function updateBlog($request, $id)
    {
        self::$blog = Blog::find($id);
        self::$blog->category_id        = $request->category_id;
        self::$blog->author_id          = Auth::user()->id;
        self::$blog->main_title         = $request->main_title;
        self::$blog->sub_title          = $request->main_title;
        self::$blog->short_description  = $request->short_description;
        self::$blog->long_description   = $request->long_description;
        if ($request->file('image'))
        {
            if (file_exists(self::$blog->image))
            {
                unlink(self::$blog->image);
            }
            self::$blog->image              = self::getImg($request);
        }

        self::$blog->save();

    }
}
