<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateHeaderRequets;
use App\Models\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    private $logo;
    public function __construct()
    {
        $this->logo = new Logo();
    }

    public function index(){
        $logo = $this->logo->getLogo();
        $data['logo'] = $logo;
        return view('admin.logo',$data);
    }

    public function getLogoAdmin(){
        $logo = $this->logo->getLogoAdmin();
        return $logo;
    }

    public function update(UpdateHeaderRequets $request){
        $flag = $this->logo->updateLogo($request);
        if($flag){
            return redirect('admin/logo')->with(['flash_level' => 'success', 'flash_messages' => 'Cập nhật thành công!']);
        }else{
            return redirect('admin/logo')->with(['flash_level' => 'danger', 'flash_messages' => 'Cập nhật thất bại!']);
        }
    }
}
