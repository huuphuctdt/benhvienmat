<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditBannerRequest;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    private $banner;
    public function __construct()
    {
        $this->banner = new Banner();
    }

    public function index(){
        $banner = $this->banner->getBanner();
        $data['banner'] = $banner;
        return view('admin.banner',$data);
    }

    public function getBanner(){
        $banner = $this->banner->getBanner();
        return $banner;
    }
    
    public function update(EditBannerRequest $request){
        $flag = $this->banner->updateBanner($request);
        if($flag){
            return redirect('admin/banner')->with(['flash_level' => 'success', 'flash_messages' => 'Cập nhật thành công!']);
        }else{
            return redirect('admin/banner')->with(['flash_level' => 'danger', 'flash_messages' => 'Cập nhật thất bại!']);
        }
    }
}
