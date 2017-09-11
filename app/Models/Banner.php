<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Banner extends Model
{
    protected $table = 'banner';
    protected $fillable = ['image','link'];

    public function getBanner(){
        $banner = Banner::all();
        return $banner->first();
    }

    public function updateBanner($request){
        if($request->hasFile('logo')){
            $image_old = Banner::find($request->po_banner_id)->image;
            File::delete(public_path('images').'/'.$image_old);
            $file= $request->file('logo');
            $imageName = time().".".$file->extension();
            $path = public_path('images');
            $file->move($path , $imageName);
            $flag = Banner::query()->update(['image' => $imageName]);
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
