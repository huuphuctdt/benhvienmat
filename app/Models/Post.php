<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable= ['category_id','image','name','content','date','month','year'];

    public function post_category(){
        return $this->belongsTo('App\Models\Post_Category','category_id');
    }

    public function getPost(){
        $posts = Post::orderBy('created_at', 'desc')->get();
        return $posts;
    }

    public function getPostAdmin(){
        $posts = Post::orderBy('created_at', 'desc')->get();
        $admin_show = Admin_Show::where('menu_eng','like','%newswraper%')->first();
        if($admin_show->is_show == 1) {
            return $posts;
        }
        return;
    }

    public function getId($id){
        $post = Post::find($id);
        return $post;
    }

    public function createPost($request){
        $flag = Post::create(['image' => '',
            'category_id' => $request->post_category,
            'name' => trim($request->name),
            'content' => $request->content]);
        if($flag){
            return true;
        }else{
            return false;
        }
    }

    public function updatePost($request){
        $flag = Post::where('id',$request->po_post_id)->update([
            'category_id' => $request->post_category,
            'name' => trim($request->name),
            'content' => $request->content]);
        if($flag){
            return true;
        }else{
            return false;
        }
    }

    public function getPostCategory($category){
        $category_name = str_slug($category);
        $posts = Post::whereHas('post_category', function ($query) use ($category_name) {
            $query->where('name_slug', 'like', "%".$category_name."%");
        })->paginate(5);
        return $posts;
    }

    public function getNamePostCategory($category){
        $name = Post_Category::where('name_slug', 'like', "%".$category."%")->first();
        return $name->name;
    }

    public function getTop2Post(){
        $posts = Post::orderBy('created_at', 'desc')->offset(0)->limit(2)->get();
        return $posts;
    }
}
