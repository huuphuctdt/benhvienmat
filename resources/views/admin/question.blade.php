@extends('admin.master')
@section('admin-content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Câu hỏi thường gặp</h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Câu hỏi thường gặp
                </li>
            </ol>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-10">
                <h2>Chỉnh sửa câu hỏi thường gặp</h2>
            </div>
            <div class="col-md-2     m-t-20">
                <a class="btn btn-success" href="{{ url('admin/question/create') }}">Tạo</a>
            </div>
        </div>
        <hr>
        @if(Session::has('flash_messages'))
            <div class="alert alert-{!! Session::get('flash_level') !!} alert_notification">
                {!! Session::get('flash_messages') !!}
            </div>
        @endif
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6"><label>Câu hỏi</label></div>
            <div class="col-md-2"><label>Kích hoạt</label></div>
        </div>
        @foreach($questions as $question)
            <div class="row form-group">
                <div class="form-group">
                    <label class="control-label col-md-2" for="pwd">Câu hỏi : </label>
                    <div class="col-md-6 {{ $errors->has('name') ? ' has-error' : '' }}">
                        <input type="text" name="name" id="name" class="form-control" value="{{ $question->name }}" disabled>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-2 {{ $errors->has('is_active') ? ' has-error' : '' }}">
                        <input type="text" name="is_active" id="is_active" class="form-control" value="@if($question->is_active == 0){{ 'Ẩn' }} @else {{ 'Hiện' }} @endif" disabled>
                    </div>
                    <form class="form-horizontal" action="{{ url('admin/question/delete') }}" method="post">
                        {{ csrf_field() }}
                        <div class="col-md-2">
                            <input type="hidden" name="po_question_id" value="{{ $question->id }}">
                            <a class="btn btn-primary" href="{{ url('admin/question/'.$question->id) }}">Chi tiết</a>
                            <button onclick="return confirm('Bạn có chắc chắn muốn xoá không?');" type="submit" class="btn btn-danger">Xóa</button>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
        <hr>
        <div class="clearfix"></div>
    </div>
@endsection