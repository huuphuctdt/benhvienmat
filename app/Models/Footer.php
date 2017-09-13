<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $table = 'footer';
    protected $fillable = ['address','phone','gmail','facebook','twitter','linkedin','google_plus','copy_right'];

    public function getFooter(){
        $footer = Footer::all();
        return $footer->first();
    }

    public function getFooterAdmin(){
        $footer = Footer::all();
        $admin_show = Admin_Show::where('menu_eng','like','%footer%')->first();
        if($admin_show->is_show == 1){
            return $footer->first();
        }
        return;
    }


    public function updateFooter($request){
        $flag = Footer::query()->update([
            'address' => $request->address,
            'phone' => $request->phone,
            'gmail' => $request->gmail,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'google_plus' => $request->google_plus,
            'copy_right' => $request->copy_right]);
        if($flag){
            return true;
        }else{
            return false;
        }
    }
}
