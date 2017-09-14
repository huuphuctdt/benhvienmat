<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Promotion extends Model
{
    protected $table = 'promotion';
    protected $fillable = ['content'];

    public function getPromotion(){
        $promotion = Promotion::all();
        return $promotion->first();
    }

    public function getPromotionAdmin(){
        $promotion = Promotion::all();
        $admin_show = Admin_Show::where('menu_eng','like','%promotion%')->first();
        if($admin_show->is_show == 1) {
            return $promotion->first();
        }
        return;
    }

    public function updatePromotion($request){
        if($request->hasFile('content')){
            $image_old = Promotion::find($request->po_promotion_id)->content;
            if(strpos($image_old, 'iframe' ) === false) {
                File::delete(public_path('images') . '/' . $image_old);
            }
            $file= $request->file('content');
            $imageName = time().".".$file->extension();
            $path = public_path('images');
            $file->move($path , $imageName);
            $flag = Promotion::where('id',$request->po_promotion_id)->update(['content' => $imageName]);
            if($flag){
                return true;
            }else{
                return false;
            }
        }else{
            $image_old = Promotion::find($request->po_promotion_id)->content;
            if(strpos($image_old, 'iframe' ) === false){
                File::delete(public_path('images').'/'.$image_old);
            }
            $flag1 = Promotion::where('id',$request->po_promotion_id)->update(['content' => $request->content]);
            if($flag1){
                return true;
            }else{
                return false;
            }
        }
    }
}
