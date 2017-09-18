@extends('admin.master')
@section('admin-content')
    <meta name="_token" content="{{csrf_token()}}">
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Quản lý người dùng</h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Quản lý người dùng
                </li>
            </ol>
        </div>
    </div>
    <div class="col-md-12">
        @if(Session::has('flash_messages'))
            <div class="alert alert-{!! Session::get('flash_level') !!} alert_notification">
                {!! Session::get('flash_messages') !!}
            </div>
        @endif
        <hr>
        <div class="row">
                <div class="col-md-6 col-md-offset-3 col-xs-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead class="bg-primary">
                            <tr>
                                <th>STT</th>
                                <th>Email</th>
                                <th>Kích hoạt</th>
                                <th>Quyền hạn</th>
                                <th>Ngày tạo</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->email }}</td>
                                    <form action="{{ url('/admin/active-user') }}" method="post">
                                        {{ csrf_field() }}
                                    <td>@if($user->active==1){!! '<button class="btn btn-success">'.'Đã kích hoạt'.'</button>' !!}@else {!! '<button class="btn btn-danger">Chưa kích hoạt</button>' !!} @endif</td>
                                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                                    </form>
                                    <td>@if($user->role==1){!! '<span style="font-weight:bold;">'.'SuperAdmin'.'</span>' !!}@else {!! '<span style="font-weight:bold;">'.'Admin'.'</span>' !!} @endif</td>
                                    <td>{{ date_format($user->created_at,'d/m/Y')  }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <div class="clearfix"></div>
    </div>
@endsection