<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected static $categorys;
    protected static $category;
    protected static $image;
    protected static $imageName;
    protected static $imgUrl;
    protected static $directory;


    public static function getImg($request,$dir = null)
    {
        self::$image        = $request->file('image');
        if (self::$image)
        {
            self::$imageName    =time().rand(10,100).'.'.self::$image->getClientOriginalExtension();
            self::$imgUrl       ='category/image/';
            self::$image->move(self::$imgUrl,self::$imageName);
            self::$directory    = self::$imgUrl.self::$imageName;
            return self::$directory;
        }
        else return $dir;

    }

    public static function newCategory($request)
    {
        self::$category               = new Category();
        self::$category->name         = $request->name;
        self::$category->description  = $request->description;
        self::$category->image        = self::getImg($request);
        self::$category->save();
    }
    public static function updateCategory($request , $id)
    {
        self::$category = Category::find($id);
        self::$category->name         = $request->name;
        self::$category->description  = $request->description;
        if ($request->file('image'))
        {
            if (file_exists(self::$category->image))
            {
                unlink(self::$category->image);
            }
            self::$category->image        = self::getImg($request);
        }
        self::$category->save();
    }





}
