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

    public function updateIntro($request)
    {
        $flag = Intro::query()->update(['image' => $request->logo]);
        if ($flag) {
            return true;
        } else {
            return false;
        }
    }
}
