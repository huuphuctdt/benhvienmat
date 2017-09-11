<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditBannerChildRequest;
use App\Models\Banner_Child;
use Illuminate\Http\Request;

class BannerChildController extends Controller
{
    private $banner_child;
    public function __construct()
    {
        $this->banner_child = new Banner_Child();
    }

    public function index(){
        $banner = $this->banner_child->getBannerChild();
        $data['banner'] = $banner;
        return view('admin.banner-child',$data);
    }

    public function update(EditBannerChildRequest $request){
        $flag = $this->banner_child->updateBannerChild($request);
        if($flag){
            return redirect('admin/banner-child')->with(['flash_level' => 'success', 'flash_messages' => 'Cập nhật thành công!']);
        }else{
            return redirect('admin/banner-child')->with(['flash_level' => 'danger', 'flash_messages' => 'Cập nhật thất bại!']);
        }
    }
}
