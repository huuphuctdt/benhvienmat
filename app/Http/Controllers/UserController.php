<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $user;
    public function __construct()
    {
        $this->user = new User();
    }

    public function index(){
        $users = $this->user->getUser();
        $data['users'] = $users;
        return view('admin.user',$data);
    }

    public function active(Request $request){
        $flag = $this->user->activeUser($request->user_id);
        if($flag){
            return redirect('admin/user')->with(['flash_level' => 'success', 'flash_messages' => 'Kích hoạt thành công!']);
        }else{
            return redirect('admin/user')->with(['flash_level' => 'danger', 'flash_messages' => 'Kích hoạt thất bại!']);
        }
    }
}
