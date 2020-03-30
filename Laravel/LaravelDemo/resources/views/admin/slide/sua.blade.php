@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Slide
                        <small>{{$slide->Ten}}</small>
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
                    <form action="admin/slide/sua/{{$slide->id}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>Tên</label>
                            <input class="form-control" type="text" name="Ten" placeholder="Nhập tên slide" value="{{$slide->Ten}}"/>
                        </div>
                        <div class="form-group">
                            <p>
                                <img src="uploads/slide/{{$slide->Hinh}}" alt="" width="300px">
                            </p>
                            <label>Hình</label>
                            <input type="file" name="Hinh" />
                        </div>
                        <div class="form-group">
                            <label>Nội Dung</label>
                            <textarea name="NoiDung" id="demo" class="form-control ckeditor" rows="5">{{$slide->NoiDung}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Link</label>
                            <input class="form-control" type="text" name="Link" placeholder="http://" value="{{$slide->link}}"/>
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
