<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Banner_Child extends Model
{
    protected $table = 'banner_child';
    protected $fillable = ['image','link'];

    public function getBannerChild(){
        $banner = Banner_Child::all();
        return $banner->first();
    }

    public function updateBannerChild($request){
        if($request->hasFile('logo')){
            $image_old = Banner_Child::find($request->po_banner_id)->image;
            File::delete(public_path('images').'/'.$image_old);
            $file= $request->file('logo');
            $imageName = time().".".$file->extension();
            $path = public_path('images');
            $file->move($path , $imageName);
            $flag = Banner_Child::query()->update(['image' => $imageName]);
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
