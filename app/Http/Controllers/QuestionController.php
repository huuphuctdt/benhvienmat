<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQuestionRequest;
use App\Http\Requests\EditQuestionRequest;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class QuestionController extends Controller
{
    private $question;
    public function __construct()
    {
        $this->question = new Question();
    }

    public function index(){
        $questions = $this->question->getQuestion();
        $data['questions'] = $questions;
        return view('admin.question',$data);
    }
    
    public function getAllQuestionAdmin(){
        $questions = $this->question->getQuestionAdmin();
        return $questions;
    }

    public function create(){
        return view('admin.question-create');
    }

    public function create_question(CreateQuestionRequest $request){
        $flag = $this->question->createQuestion($request);
        if($flag){
            return redirect('admin/question')->with(['flash_level' => 'success', 'flash_messages' => 'Tạo thành công!']);
        }else{
            return redirect('admin/question')->with(['flash_level' => 'danger', 'flash_messages' => 'Tạo thất bại!']);
        }
    }

    public function edit($id){
        $question = $this->question->getId($id);
        $data['question'] = $question;
        return view('admin.question-detail', $data);
    }

    public function save_edit(EditQuestionRequest $request){
        $flag = $this->question->updateQuestion($request);
        if($flag){
            return redirect('admin/question')->with(['flash_level' => 'success', 'flash_messages' => 'Cập nhật thành công!']);
        }else{
            return redirect('admin/question')->with(['flash_level' => 'danger', 'flash_messages' => 'Cập nhật thất bại!']);
        }
    }

    public function delete(Request $request){
        $question = $this->question->getId($request->po_question_id);
        $flag1 = $question->delete();

        if ($flag1) {
            return redirect('admin/question')->with(['flash_level' => 'success', 'flash_messages' => 'Xoá thành công!']);
        } else {
            return redirect('admin/question')->with(['flash_level' => 'danger', 'flash_messages' => 'Xoá thất bại!']);
        }
    }
}
