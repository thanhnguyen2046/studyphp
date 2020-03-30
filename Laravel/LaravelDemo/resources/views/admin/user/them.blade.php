@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(count($errors) > 0)
                @foreach($errors->all() as $err)
                    <div class="col-lg-12">
                        <div class="alert alert-danger">
                            {{$err}}
                        </div>
                    </div>
                @endforeach
            @endif
            @if(session('thongbao'))
                <div class="alert alert-success">{{session('thongbao')}}</div>
            @endif
            @if(session('loi'))
                <div class="alert alert-danger">{{session('loi')}}</div>
            @endif
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="admin/user/them" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Họ Tên</label>
                        <input class="form-control" name="name" placeholder="Nhập họ tên" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="email" name="email" placeholder="Nhập địa chỉ email" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Nhập mật khẩu" />
                    </div>
                    <div class="form-group">
                        <label>Nhập lại password</label>
                        <input class="form-control" type="password" name="passwordAgain" placeholder="Nhập lại mật khẩu" />
                    </div>
                    <div class="form-group">
                        <label>Quyền người dùng</label>
                        <label class="radio-inline">
                            <input name="quyen" value="0" checked type="radio">Thường
                        </label>
                        <label class="radio-inline">
                            <input name="quyen" value="1" type="radio">Admin
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Thêm</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                    <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
    @endsection
