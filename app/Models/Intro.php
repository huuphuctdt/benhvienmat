<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Intro extends Model
{
    protected $table = 'intro';
    protected $fillable = ['image','link'];

    public function getIntro(){
        $intro = Intro::all();
        return $intro->first();
    }

    public function getIntroAdmin(){
        $intro = Intro::all();
        $admin_show = Admin_Show::where('menu_eng','like','%intro%')->first();
        if($admin_show->is_show == 1){
            return $intro->first();
        }
        return;
    }

    public function updateIntro($request){
        if($request->hasFile('logo')){
            $image_old = Intro::find($request->po_intro_id)->image;
            File::delete(public_path('images').'/'.$image_old);
            $file= $request->file('logo');
            $imageName = time().".".$file->extension();
            $path = public_path('images');
            $file->move($path , $imageName);
            $flag = Intro::query()->update(['image' => $imageName]);
            if($flag){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
}
