@extends('admin.master')
@section('admin-content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Footer</h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Footer
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
        <form class="form-horizontal" action="{{ url('admin/footer/update') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="control-label col-md-2" for="address">Địa chỉ :</label>
                <div class="col-md-10 {{ $errors->has('address') ? ' has-error' : '' }} form-group">
                    <input type="text" name="address" id="address" class="form-control" value="{{ $footer->address }}">
                    @if ($errors->has('address'))
                        <span class="help-block">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="clearfix"></div>
                <label class="control-label col-md-2" for="phone">Số Điện Thoại :</label>
                <div class="col-md-10 {{ $errors->has('phone') ? ' has-error' : '' }} form-group">
                    <input type="text" name="phone" id="phone" class="form-control" value="{{ $footer->phone }}">
                    @if ($errors->has('phone'))
                        <span class="help-block">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="clearfix"></div>
                <label class="control-label col-md-2" for="gmail">Gmail :</label>
                <div class="col-md-10 {{ $errors->has('gmail') ? ' has-error' : '' }} form-group">
                    <input type="text" name="gmail" id="gmail" class="form-control" value="{{ $footer->gmail }}">
                    @if ($errors->has('gmail'))
                        <span class="help-block">
                            <strong>{{ $errors->first('gmail') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="clearfix"></div>
                <label class="control-label col-md-2" for="facebook">Facebook :</label>
                <div class="col-md-10 {{ $errors->has('facebook') ? ' has-error' : '' }} form-group">
                    <input type="text" name="facebook" id="facebook" class="form-control" value="{{ $footer->facebook }}">
                    @if ($errors->has('facebook'))
                        <span class="help-block">
                            <strong>{{ $errors->first('facebook') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="clearfix"></div>
                <label class="control-label col-md-2" for="twitter">Twitter :</label>
                <div class="col-md-10 {{ $errors->has('twitter') ? ' has-error' : '' }} form-group">
                    <input type="text" name="twitter" id="twitter" class="form-control" value="{{ $footer->twitter }}">
                    @if ($errors->has('twitter'))
                        <span class="help-block">
                            <strong>{{ $errors->first('twitter') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="clearfix"></div>
                <label class="control-label col-md-2" for="linkedin">Linkedin :</label>
                <div class="col-md-10 {{ $errors->has('linkedin') ? ' has-error' : '' }} form-group">
                    <input type="text" name="linkedin" id="linkedin" class="form-control" value="{{ $footer->linkedin }}">
                    @if ($errors->has('linkedin'))
                        <span class="help-block">
                            <strong>{{ $errors->first('linkedin') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="clearfix"></div>
                <label class="control-label col-md-2" for="google_plus">Google Plus :</label>
                <div class="col-md-10 {{ $errors->has('google_plus') ? ' has-error' : '' }} form-group">
                    <input type="text" name="google_plus" id="google_plus" class="form-control" value="{{ $footer->google_plus }}">
                    @if ($errors->has('google_plus'))
                        <span class="help-block">
                            <strong>{{ $errors->first('google_plus') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="clearfix"></div>
                <label class="control-label col-md-2" for="instagram">Instagram :</label>
                <div class="col-md-10 {{ $errors->has('instagram') ? ' has-error' : '' }} form-group">
                    <input type="text" name="instagram" id="instagram" class="form-control" value="{{ $footer->instagram }}">
                    @if ($errors->has('instagram'))
                        <span class="help-block">
                            <strong>{{ $errors->first('instagram') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="clearfix"></div>
                <label class="control-label col-md-2" for="chart">Chart :</label>
                <div class="col-md-10 {{ $errors->has('chart') ? ' has-error' : '' }} form-group">
                    <input type="text" name="chart" id="chart" class="form-control" value="{{ $footer->chart }}">
                    @if ($errors->has('chart'))
                        <span class="help-block">
                            <strong>{{ $errors->first('chart') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="clearfix"></div>
                <label class="control-label col-md-2" for="copy_right">Copy Right :</label>
                <div class="col-md-10 {{ $errors->has('copy_right') ? ' has-error' : '' }} form-group">
                    <input type="text" name="copy_right" id="copy_right" class="form-control" value="{{ $footer->copy_right }}">
                    @if ($errors->has('copy_right'))
                        <span class="help-block">
                            <strong>{{ $errors->first('copy_right') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="clearfix"></div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="hidden" name="po_footer_id" value="{{ $footer->id }}">
                        <button type="submit" class="btn btn-primary">Xác nhận</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection