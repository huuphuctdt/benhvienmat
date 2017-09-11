@extends('admin.master')
@section('admin-content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Danh mục bài viết</h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Danh mục bài viết
                </li>
            </ol>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <h2>Chi tiết danh mục bài viết</h2>
            </div>
            <div class="col-md-4 m-t-20 text-right">
                <a class="btn btn-warning" href="{{ url('admin/post_category') }}">Quay về</a>
            </div>
        </div>
        <hr>
        @if(Session::has('flash_messages'))
            <div class="alert alert-{!! Session::get('flash_level') !!} alert_notification">
                {!! Session::get('flash_messages') !!}
            </div>
        @endif
        <form class="form-group" action="{{ url('admin/post_category/edit') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <label class="control-label col-md-2" for="menu_name"></label>
                <label class="control-label col-md-2" for="menu_name">Tên danh mục : </label>
            </div>
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-md-2" for="image">Danh mục : </label>
                    <div class="col-md-4 {{ $errors->has('name') ? ' has-error' : '' }}">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name..."  value="{{ old('name', $post_category->name) }}">
                        @if ($errors->has('name'))
                            <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-md-4 {{ $errors->has('image') ? ' has-error' : '' }}">
                        <img src="{{ url('images/'.$post_category->image) }}" width="400">
                        <input type="file" class="form-control m-t-20" id="image" name="image">
                        @if ($errors->has('image'))
                            <span class="help-block">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <hr>
            <div class="row">
                <div class="col-md-12 text-center">
                    <input type="hidden" name="po_post_category_id" value="{{ $post_category->id }}">
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </div>
            </div>
        </form>
    </div>
@endsection