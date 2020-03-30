@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tin Tức <br/>
                        <small>{{$tintuc->TieuDe}}</small>
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
                    <form action="admin/tintuc/sua/{{$tintuc->id}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>Thể Loại</label>
                            <select class="form-control" name="TheLoai" id="TheLoai">
                                @foreach($theloai as $tl)
                                    <option value="{{$tl->id}}"
                                            @if($tintuc->loaitin->theloai->id == $tl->id)
                                            selected
                                            @endif
                                    >{{$tl->Ten}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Loại Tin</label>
                            <select class="form-control" name="LoaiTin" id="LoaiTin">
                                @foreach($loaitin as $lt)
                                    <option value="{{$lt->id}}"
                                            @if($tintuc->loaitin->id == $lt->id)
                                            selected
                                            @endif
                                    >{{$lt->Ten}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tiêu Đề</label>
                            <input class="form-control" type="text" name="TieuDe" placeholder="Nhập tiêu đề" value="{{$tintuc->TieuDe}}"/>
                        </div>
                        <div class="form-group">
                            <label>Tóm Tắt</label>
                            <textarea name="TomTat" id="demo" class="form-control ckeditor" rows="3">
                            {{$tintuc->TomTat}}
                        </textarea>
                        </div>
                        <div class="form-group">
                            <label>Nội Dung</label>
                            <textarea name="NoiDung" id="demo" class="form-control ckeditor" rows="5">
                            {{$tintuc->NoiDung}}
                        </textarea>
                        </div>
                        <div class="form-group">
                            <p>
                                <img src="uploads/tintuc/{{$tintuc->Hinh}}" alt="" width="150px">
                            </p>
                            <input type="hidden" value="{{$tintuc->Hinh}}" name="HinhCu">
                            <label>Hình Ảnh</label>
                            <input type="file" name="Hinh">
                        </div>
                        <div class="form-group">
                            <label>Nổi Bât</label>
                            <label class="radio-inline">
                                <input name="NoiBat" value="0"
                                       @if($tintuc->NoiBat == 0)
                                       checked
                                       @endif
                                       type="radio">Không
                            </label>
                            <label class="radio-inline">
                                <input name="NoiBat" value="1"
                                       @if($tintuc->NoiBat == 1)
                                       checked
                                       @endif
                                       type="radio">Có
                            </label>
                        </div>
                        <button type="submit" class="btn btn-default">Sửa</button>
                        <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                </div>

            </div>
            <!-- /.row -->
            <!-- .comment -->

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Bình Luận
                        <small>Danh Sách</small>
                    </h1>
                </div>
                <div class="col-lg-12">
                    @if(session('thongbaocomment'))
                        <div class="alert alert-success"> {{session('thongbaocomment')}}</div>
                    @endif
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Người Dùng</th>
                        <th>Nội Dung</th>
                        <th>Ngày Đăng</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tintuc->comment as $cm)
                        <tr class="odd gradeX" align="center">
                            <th>{{$cm->id}}</th>
                            <th>{{$cm->user->name}}</th>
                            <th>{{$cm->NoiDung}}</th>
                            <th>{{$cm->created_at}}</th>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/comment/xoa/{{$cm->id}}/{{$tintuc->id}}"> Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->


@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#TheLoai').change(function () {
                var idTheLoai = $(this).val();
                $.get("admin/ajax/loaitin/" + idTheLoai, function (data) {
                    $('#LoaiTin').html(data);
                });
            });
        });
    </script>
@endsection