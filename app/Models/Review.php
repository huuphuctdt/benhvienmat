<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Review extends Model
{
    protected $table = 'review';
    protected $fillable = ['image','name', 'content'];

    public function getReview(){
        $reviews = Review::all();
        return $reviews;
    }

    public function getReviewAdmin(){
        $reviews = Review::all();
        $admin_show = Admin_Show::where('menu_eng','like','%reviews%')->first();
        if($admin_show->is_show == 1){
            return $reviews;
        }
        return;
    }

    public function getId($id){
        $review = Review::find($id);
        return $review;
    }

    public function createReview($request){
        if($request->hasFile('image')){
            $file= $request->file('image');
            $imageName = time().".".$file->extension();
            $path = public_path('images');
            $file->move($path , $imageName);
            $flag = Review::create(['image' => trim($imageName),
                'name' => trim($request->name),
                'content' => trim($request->content)]);
            if($flag){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public function updateReview($request){
        if($request->hasFile('image')){
            $image_old = Review::find($request->po_review_id)->image;
            File::delete(public_path('images').'/'.$image_old);
            $file= $request->file('image');
            $imageName = time().".".$file->extension();
            $path = public_path('images');
            $file->move($path , $imageName);
            $flag = Review::where('id',$request->po_review_id)->update(['name' => trim($request->name),
                'content' => trim($request->content),
                'image' => $imageName]);
            if($flag){
                return true;
            }else{
                return false;
            }
        }
        $flag1 = Review::where('id',$request->po_review_id)->update(['name' => trim($request->name), 'content' => trim($request->content)]);
        if($flag1){
            return true;
        }else{
            return false;
        }
    }
}
