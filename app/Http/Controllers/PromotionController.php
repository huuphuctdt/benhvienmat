<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePromotionRequest;
use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    private $promotion;
    public function __construct()
    {
        $this->promotion = new Promotion();
    }

    public function index(){
        $promotion = $this->promotion->getPromotion();
        $data['promotion'] = $promotion;
        return view('admin.promotion', $data);
    }

    public function getPromotionAdmin(){
        $promotion = $this->promotion->getPromotionAdmin();
        return $promotion;
    }

    public function update(Request $request){
        $flag = $this->promotion->updatePromotion($request);
        if($flag){
            return redirect('admin/promotion')->with(['flash_level' => 'success', 'flash_messages' => 'Cập nhật thành công!']);
        }else{
            return redirect('admin/promotion')->with(['flash_level' => 'danger', 'flash_messages' => 'Cập nhật thất bại!']);
        }
    }
}
