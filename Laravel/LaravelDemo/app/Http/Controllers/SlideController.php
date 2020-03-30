<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Slide;

class SlideController extends Controller
{
    public function getDanhSach()
    {
        $slide = Slide::all();
        return view('admin.slide.danhsach', ["slide" => $slide]);
    }

    public function getThem()
    {
        return view('admin.slide.them');
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
          [
            'Ten' => 'required',
            'NoiDung' => 'required'
          ],
          [
            'Ten.required' => 'Bạn chưa nhập tên slide',
            'NoiDung.required' => 'Bạn chưa nhập nội dung slide'
          ]);
        $slide = new Slide;
        $slide->Ten = $request->Ten;
        $slide->NoiDung = $request->NoiDung;
        if($request->has('Link')){
            $slide->link = $request->Link;
        }
        if($request->hasFile('Hinh')){
            $file = $request->file('Hinh');
            $fileExt = $file->getClientOriginalExtension();
            if($fileExt != "jpg" && $fileExt != "jpeg" && $fileExt!="png"&&$fileExt!="giff"){
                return redirect('admin/slide/them')->with('loi','Bạn chỉ được chọn file hình ảnh');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while (file_exists("uploads/slide/".$Hinh)){
                $Hinh = str_random(4)."_".$name;
            }
            $file->move('uploads/slide',$Hinh);
            $slide->Hinh = $Hinh;
        }else{
            $slide->Hinh = "";
        }
        $slide->save();
        return redirect('admin/slide/them')->with('thongbao','Bạn đã thêm thành công');
    }

    public function getSua($id)
    {
        $slide = Slide::find($id);
        return view('admin.slide.sua',["slide"=>$slide]);
    }
    public function postSua(Request $request, $id)
    {
        $slide = Slide::find($id);
        $this->validate($request,
          [
            'Ten' => 'required',
            'NoiDung' => 'required'
          ],
          [
            'Ten.required' => 'Bạn chưa nhập tên slide',
            'NoiDung.required' => 'Bạn chưa nhập nội dung slide'
          ]);
        $slide->Ten = $request->Ten;
        $slide->NoiDung = $request->NoiDung;
        if($request->has('Link')){
            $slide->link = $request->Link;
        }
        if($request->hasFile('Hinh')){
            $file = $request->file('Hinh');
            $fileExt = $file->getClientOriginalExtension();
            if($fileExt != "jpg" && $fileExt != "jpeg" && $fileExt!="png"&&$fileExt!="giff"){
                return redirect('admin/slide/them')->with('loi','Bạn chỉ được chọn file hình ảnh');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while (file_exists("uploads/slide/".$Hinh)){
                $Hinh = str_random(4)."_".$name;
            }
            $file->move('uploads/slide',$Hinh);
            $slide->Hinh = $Hinh;
        }
        $slide->save();
        return redirect('admin/slide/sua/'.$id)->with('thongbao','Bạn đã sửa thành công');
    }

    public function getXoa($id)
    {
        $slide = Slide::find($id);
        $slide->delete();
        return redirect('admin/slide/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }


}
