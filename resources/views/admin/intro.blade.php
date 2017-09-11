@extends('admin.master')
@section('admin-content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Giới thiệu</h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Giới thiệu
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <div class="col-lg-12">
        @if(Session::has('flash_messages'))
            <div class="alert alert-{!! Session::get('flash_level') !!} alert_notification">
                {!! Session::get('flash_messages') !!}
            </div>
        @endif
        <form class="form-horizontal" action="{{ url('admin/intro/update') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="control-label col-md-2" for="logo">Giới thiệu :</label>
                <div class="col-md-5 {{ $errors->has('logo') ? ' has-error' : '' }}">
                    <img src="{{ url('images/'.$intro->image) }}" alt="logo" title="logo" name="file" width="700">
                    <input type="file" name="logo" class="form-control m-t-20">
                    @if ($errors->has('logo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('logo') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="hidden" name="po_intro_id" value="{{ $intro->id }}">
                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                </div>
            </div>
        </form>
    </div>
@endsection