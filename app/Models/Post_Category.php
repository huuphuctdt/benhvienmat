<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Post_Category extends Model
{
    protected $table = 'post_category';
    protected $fillable = ['name', 'name_slug','image'];

    public function post(){
        return $this->hasMany('App\Models\Post','category_id');
    }

    public function getPostCategory(){
        $postCategory = Post_Category::all();
        return $postCategory;
    }

    public function createPostCategory($request){
        $flag = Post_Category::create(['name' => trim($request->name), 'name_slug' => trim(str_slug($request->name))]);
        if($flag){
            return true;
        }else{
            return false;
        }
    }

    public function getId($id){
        $postCategory = Post_Category::find($id);
        return $postCategory;
    }

    public function updatePostCategory($request){
        if($request->hasFile('image')){
            $image_old = Post_Category::find($request->po_post_category_id)->image;
            File::delete(public_path('images').'/'.$image_old);
            $file= $request->file('image');
            $imageName = time().".".$file->extension();
            $path = public_path('images');
            $file->move($path , $imageName);
            $flag = Post_Category::where('id',$request->po_post_category_id)->update(['name' => trim($request->name), 'name_slug' => trim(str_slug($request->name)), 'image' => $imageName]);
            if($flag){
                return true;
            }else{
                return false;
            }
        }
        $flag1 = Post_Category::where('id',$request->po_post_category_id)->update(['name' => trim($request->name), 'name_slug' => trim(str_slug($request->name))]);
        if($flag1){
            return true;
        }else{
            return false;
        }
    }
}
