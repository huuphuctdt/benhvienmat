@extends('admin.master')
@section('admin-content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Bài viết</h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Bài viết
                </li>
            </ol>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <h2>Chi tiết bài viết</h2>
            </div>
            <div class="col-md-4 m-t-20 text-right">
                <a class="btn btn-warning" href="{{ url('admin/post') }}">Back</a>
            </div>
        </div>
        <hr>
        @if(Session::has('flash_messages'))
            <div class="alert alert-{!! Session::get('flash_level') !!} alert_notification">
                {!! Session::get('flash_messages') !!}
            </div>
        @endif
        <form class="form-group" action="{{ url('admin/post/edit') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <label class="control-label col-md-2" for="menu_name"></label>
                <label class="control-label col-md-5" for="menu_name">Danh mục : </label>
                <label class="control-label col-md-5" for="menu_name">Tiêu đề : </label>
            </div>
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-md-2" for="image">Bài viết : </label>
                    <div class="col-md-5 {{ $errors->has('post_category') ? ' has-error' : '' }}">
                        <select name="post_category" class="form-control">
                            <option value="">--- Select ---</option>
                            @foreach($post_categorys as $post_category)
                                <option @if(old('post_category') != null && (old('post_category') == $post_category->id)) {{ 'selected' }} @endif @if(($post->category_id == $post_category->id) && (old('post_category') == null)) {{ 'selected' }} @endif value="{{ $post_category->id }}">{{ $post_category->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('post_category'))
                            <span class="help-block">
                            <strong>{{ $errors->first('post_category') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-md-5 {{ $errors->has('name') ? ' has-error' : '' }}">
                        <textarea class="form-control" id="name" name="name" placeholder="Enter name..."  rows="1">@if(old('name') != ''){{ old('name') }}@else{{ $post->name }}@endif</textarea>
                        @if ($errors->has('name'))
                            <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row col-md-offset-2 m-t-20 {{ $errors->has('content') ? ' has-error' : '' }}">
                <label class="control-label" for="image">Nội dung : </label>
                <textarea name="content" class="form-control my-textarea">{!! $post->content !!}</textarea>
                @if ($errors->has('content'))
                    <span class="help-block">
                            <strong>{{ $errors->first('content') }}</strong>
                        </span>
                @endif
            </div>
            <div class="clearfix"></div>
            <hr>
            <div class="row">
                <div class="col-md-12 text-center">
                    <input type="hidden" name="po_post_id" value="{{ $post->id }}">
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
    <script>

    </script>
@endsection