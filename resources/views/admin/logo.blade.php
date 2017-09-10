@extends('admin.master')
@section('admin-content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Logo</h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Logo
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
        <form class="form-horizontal" action="{{ url('admin/header/update') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="control-label col-md-2" for="logo">Logo :</label>
                <div class="col-md-10 {{ $errors->has('logo') ? ' has-error' : '' }}">
                    <img src="{{ url('images/'.$logo->image) }}" alt="logo" title="logo" name="file">
                    <input type="file" name="logo" class="form-control">
                    @if ($errors->has('logo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('logo') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="hidden" name="po_logo_id" value="{{ $logo->id }}">
                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                </div>
            </div>
        </form>
    </div>
@endsection