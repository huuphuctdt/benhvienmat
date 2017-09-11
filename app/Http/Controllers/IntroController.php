<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditIntroRequest;
use App\Models\Intro;
use Illuminate\Http\Request;

class IntroController extends Controller
{
    private $intro;
    public function __construct()
    {
        $this->intro = new Intro();
    }

    public function index(){
        $intro = $this->intro->getIntro();
        $data['intro'] = $intro;
        return view('admin.intro',$data);
    }

    public function update(EditIntroRequest $request){
        $flag = $this->intro->updateIntro($request);
        if($flag){
            return redirect('admin/intro')->with(['flash_level' => 'success', 'flash_messages' => 'Cập nhật thành công!']);
        }else{
            return redirect('admin/intro')->with(['flash_level' => 'danger', 'flash_messages' => 'Cập nhật thất bại!']);
        }
    }
}
