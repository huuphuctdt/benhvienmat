@extends('admin.master')
@section('admin-content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Ý kiến khách hàng</h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Ý kiến khách hàng
                </li>
            </ol>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-10">
                <h2>Chỉnh sửa ý kiến khách hàng</h2>
            </div>
            <div class="col-md-2 m-t-20">
                <a class="btn btn-success" href="{{ url('admin/review/create') }}">Tạo</a>
            </div>
        </div>
        <hr>
        @if(Session::has('flash_messages'))
            <div class="alert alert-{!! Session::get('flash_level') !!} alert_notification">
                {!! Session::get('flash_messages') !!}
            </div>
        @endif
        <div class="row">
            <div class="col-md-4 col-md-offset-2"><label>Tên khách hàng</label></div>
            <div class="col-md-4"><label>Nội dung</label></div>
        </div>
        @foreach($reviews as $review)
            <div class="row form-group">
                <div class="form-group">
                    <label class="control-label col-md-2" for="pwd">Ý kiến : </label>
                    <div class="col-md-4 {{ $errors->has('name') ? ' has-error' : '' }}">
                        <input type="text" name="name" id="name" class="form-control" value="{{ $review->name }}" disabled>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-4 {{ $errors->has('content') ? ' has-error' : '' }}">
                        <input type="text" name="content" id="content" class="form-control" value="{{ $review->content }}" disabled>
                        @if ($errors->has('content'))
                            <span class="help-block">
                                <strong>{{ $errors->first('content') }}</strong>
                            </span>
                        @endif
                    </div>
                    <form class="form-horizontal" action="{{ url('admin/review/delete') }}" method="post">
                        {{ csrf_field() }}
                        <div class="col-md-2">
                            <input type="hidden" name="po_review_id" value="{{ $review->id }}">
                            <a class="btn btn-primary" href="{{ url('admin/review/'.$review->id) }}">Chi tiết</a>
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