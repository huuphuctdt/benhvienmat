<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Logo extends Model
{
    protected $table = 'logo';
    protected $fillable = ['image'];

    public function getLogo(){
        $logo = Logo::all();
        return $logo->first();
    }

    public function getLogoAdmin(){
        $logo = Logo::all();
        $admin_show = Admin_Show::where('menu_eng','like','%header%')->first();
        if($admin_show->is_show == 1){
            return $logo->first();
        }
        return;
    }

    public function updateLogo($request){
        if($request->hasFile('logo')){
            $image_old = Logo::find($request->po_logo_id)->image;
            File::delete(public_path('images').'/'.$image_old);
            $file= $request->file('logo');
            $imageName = time().".".$file->extension();
            $path = public_path('images');
            $file->move($path , $imageName);
            $flag = Logo::query()->update(['image' => $imageName]);
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
