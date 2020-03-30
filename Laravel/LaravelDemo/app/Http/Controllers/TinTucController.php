<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TheLoai;
use App\TinTuc;
use App\LoaiTin;
use App\Comment;


class TinTucController extends Controller
{
    public function getDanhSach()
    {
        $tintuc = TinTuc::orderBy('id', 'DESC')->get();
        return view('admin.tintuc.danhsach', ['tintuc' => $tintuc]);
    }

    public function getThem()
    {
        $theloai = TheLoai::all();
        $loaitin = LoaiTin::all();
        return view('admin.tintuc.them', ["theloai" => $theloai, "loaitin" => $loaitin]);
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
          [
            'LoaiTin' => 'required',
            'TieuDe' => 'required|min:3|unique:TinTuc,TieuDe',
            'TomTat' => 'required',
            'NoiDung' => 'required'
          ],
          [
            'LoaiTin.required' => 'Bạn chưa chọn loại tin',
            'TieuDe.required' => 'Bạn chưa nhập tiêu đề',
            'TieuDe.min' => 'Tiêu đề phải có ít nhất 3 ký tự',
            'TieuDe.unique' => 'Tiêu đề đã tồn tại',
            'TomTat.required' => 'Bạn chưa nhập tóm tắt',
            'NoiDung.required' => 'Bạn chưa nhập nội dung'
          ]);
        $tintuc = new TinTuc;
        $tintuc->TieuDe = $request->TieuDe;
        $tintuc->TieuDeKhongDau = changeTitle($request->TieuDe);
        $tintuc->idLoaiTin = $request->TheLoai;
        $tintuc->TomTat = $request->TomTat;
        $tintuc->NoiDung = $request->NoiDung;
        $tintuc->NoiBat = $request->NoiBat;
        $tintuc->SoLuotXem = 0;
        if ($request->hasFile('Hinh')) {
            $file = $request->file('Hinh');
            $fileExt = $file->getClientOriginalExtension();
            if ($fileExt != "png" && $fileExt != "jpg" && $fileExt != "jpeg" && $fileExt != "giff") {
                return redirect("admin/tintuc/them")->with('loi', 'Bạn chỉ được chọn file hình ảnh');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4) . "_" . $name;
            while (file_exists("uploads/tintuc/" . $Hinh)) {
                $Hinh = str_random(4) . "_" . $name;
            }
            $file->move("uploads/tintuc", $Hinh);
            $tintuc->Hinh = $Hinh;

        } else {
            $tintuc->Hinh = "";
        }

        $tintuc->save();
        return redirect("admin/tintuc/them")->with('thongbao', 'Bạn đã thêm tin tức thành công');
    }

    public function getSua($id)
    {
        $tintuc = TinTuc::find($id);
        $theloai = TheLoai::all();
        $loaitin = LoaiTin::all();
       return view('admin.tintuc.sua',["tintuc"=>$tintuc, "theloai"=>$theloai, "loaitin"=>$loaitin]);

    }

    public function postSua(Request $request, $id)
    {
        $tintuc = TinTuc::find($id);
        $this->validate($request,
          [
            'LoaiTin' => 'required',
            'TieuDe' => 'required|min:3|unique:TinTuc,TieuDe',
            'TomTat' => 'required',
            'NoiDung' => 'required'
          ],
          [
            'LoaiTin.required' => 'Bạn chưa chọn loại tin',
            'TieuDe.required' => 'Bạn chưa nhập tiêu đề',
            'TieuDe.min' => 'Tiêu đề phải có ít nhất 3 ký tự',
            'TieuDe.unique' => 'Tiêu đề đã tồn tại',
            'TomTat.required' => 'Bạn chưa nhập tóm tắt',
            'NoiDung.required' => 'Bạn chưa nhập nội dung'
          ]);
        $tintuc->TieuDe = $request->TieuDe;
        $tintuc->TieuDeKhongDau = changeTitle($request->TieuDe);
        $tintuc->idLoaiTin = $request->TheLoai;
        $tintuc->TomTat = $request->TomTat;
        $tintuc->NoiDung = $request->NoiDung;
        $tintuc->NoiBat = $request->NoiBat;
        if ($request->hasFile('Hinh')) {
            $file = $request->file('Hinh');
            $fileExt = $file->getClientOriginalExtension();
            if ($fileExt != "png" && $fileExt != "jpg" && $fileExt != "jpeg" && $fileExt != "giff") {
                return redirect("admin/tintuc/them")->with('loi', 'Bạn chỉ được chọn file hình ảnh');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4) . "_" . $name;
            while (file_exists("uploads/tintuc/" . $Hinh)) {
                $Hinh = str_random(4) . "_" . $name;
            }
            $file->move("uploads/tintuc", $Hinh);
            unlink("uploads/tintuc/".$tintuc->Hinh); //xoa hinh cu
            $tintuc->Hinh = $Hinh;

        } else {
            $tintuc->Hinh = $request->HinhCu;
        }

        $tintuc->save();
        return redirect("admin/tintuc/sua/".$id)->with('thongbao', 'Bạn đã sửa tin tức thành công');
    }

    public function getXoa(Request $request, $id)
    {
        $tintuc = TinTuc::find($id);
        $tintuc->delete();
        return redirect("admin/tintuc/danhsach")->with('thongbao','Bạn đã xóa thành công');
    }
}
