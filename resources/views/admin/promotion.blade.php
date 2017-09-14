@extends('admin.master')
@section('admin-content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Khuyến mãi</h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Khuyến mãi
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
            <div class="form-group">
                <label class="control-label col-md-2" for="content">Khuyến mãi :</label>
                <div class="col-md-10 {{ $errors->has('content') ? ' has-error' : '' }}">

                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Hình ảnh</button>
                    <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <form class="form-group" action="{{ url('admin/promotion/update') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Hình ảnh</h4>
                                </div>
                                <div class="modal-body">

                                        @if( strpos( $promotion->content, 'iframe' ) == false )
                                            <div id="modal-body-video"><img src="{{ url('images/'.$promotion->content) }}" title="" alt=""></div>
                                        @endif
                                        <label>Hình ảnh : </label>
                                        <input type="file" class="form-control" name="content" id="content">
                                        @if ($errors->has('content'))
                                            <span class="help-block">
                                               <strong>{{ $errors->first('content') }}</strong>
                                            </span>
                                        @endif
                                        <input type="hidden" name="po_promotion_id" value="{{ $promotion->id }}">

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Xác nhận</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Video</button>
                    <!-- Modal -->
                    <div id="myModal1" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <form class="form-group" action="{{ url('admin/promotion/update') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Video</h4>
                                </div>
                                <div class="modal-body">

                                        @if( strpos( $promotion->content, 'iframe' ) !== false )
                                            <div id="modal-body-video">{!! $promotion->content !!}</div>
                                        @endif
                                        <label>Video : </label>
                                        <textarea name="content" id="content" class="form-control" rows="2"></textarea>
                                        @if ($errors->has('content'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('content') }}</strong>
                                            </span>
                                        @endif
                                        <input type="hidden" name="po_promotion_id" value="{{ $promotion->id }}">

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Xác nhận</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    @if ($errors->has('content'))
                        <span class="help-block">
                            <strong>{{ $errors->first('content') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
    </div>
@endsection