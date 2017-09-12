<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'question';
    protected $fillable = ['name', 'content','is_active'];

    public function getQuestion(){
        $questions = Question::all();
        return $questions;
    }

    public function createQuestion($request){
        $flag = Question::create([
            'name' => trim($request->name),
            'is_active' => trim($request->is_active),
            'content' => trim($request->content)]);
        if($flag){
            return true;
        }else{
            return false;
        }
    }

    public function getId($id){
        $question = Question::find($id);
        return $question;
    }

    public function updateQuestion($request){
        $flag1 = Question::where('id',$request->po_question_id)->update(['name' => trim($request->name),'is_active' => trim($request->is_active), 'content' => trim($request->content)]);
        if($flag1){
            return true;
        }else{
            return false;
        }
    }
}
