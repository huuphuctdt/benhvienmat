<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReviewRequest;
use App\Http\Requests\EditReviewRequest;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\File;

class ReviewController extends Controller
{
    private $review;
    public function __construct()
    {
        $this->review = new Review();
    }

    public function index(){
        $reviews = $this->review->getReview();
        $data['reviews'] = $reviews;
        return view('admin.review',$data);
    }

    public function create(){
        return view('admin.review-create');
    }

    public function create_review(CreateReviewRequest $request){
        $flag = $this->review->createReview($request);
        if($flag){
            return redirect('admin/review')->with(['flash_level' => 'success', 'flash_messages' => 'Tạo thành công!']);
        }else{
            return redirect('admin/review')->with(['flash_level' => 'danger', 'flash_messages' => 'Tạo thất bại!']);
        }
    }

    public function edit($id){
        $review = $this->review->getId($id);
        $data['review'] = $review;
        return view('admin.review-detail', $data);
    }

    public function save_edit(EditReviewRequest $request){
        $flag = $this->review->updateReview($request);
        if($flag){
            return redirect('admin/review')->with(['flash_level' => 'success', 'flash_messages' => 'Cập nhật thành công!']);
        }else{
            return redirect('admin/review')->with(['flash_level' => 'danger', 'flash_messages' => 'Cập nhật thất bại!']);
        }
    }

    public function delete(Request $request){
        $review = $this->review->getId($request->po_review_id);
        File::delete(public_path('images').'/'.$review->image);
        $flag1 = $review->delete();
        if ($flag1) {
            return redirect('admin/review')->with(['flash_level' => 'success', 'flash_messages' => 'Xoá thành công!']);
        } else {
            return redirect('admin/review')->with(['flash_level' => 'danger', 'flash_messages' => 'Xoá thất bại!']);
        }
    }
}
