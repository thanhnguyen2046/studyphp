<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //add khi dung lop dang nhap

use App\Http\Requests;
use App\TheLoai;
use App\Slide;
use App\LoaiTin;
use App\TinTuc;


class PagesController extends Controller
{
    function __construct()
    {
        $theloai = TheLoai::all();
        $slide = Slide::all();
        view()->share('theloai',$theloai);
        view()->share('slide',$slide);
        if(Auth::check())
        {
            view()->share('nguoidung',Auth::user());
        }else{

        }
    }

    function trangchu()
    {
        return view('pages.trangchu');
    }

    public function lienhe()
    {
        return view('pages.trangchu');
    }

    public function loaitin($id)
    {
        $loaitin = LoaiTin::find($id);
        $tintuc = TinTuc::where('idLoaiTin',$id)->paginate(5);
        return view('pages.loaitin',["loaitin"=>$loaitin, "tintuc"=>$tintuc]);
    }

    public function tintuc($id)
    {
        $tintuc = TinTuc::find($id);
        $tinnoibat = TinTuc::where('NoiBat',1)->take(4)->get();
        $tinlienquan = TinTuc::where('idLoaiTin',$tintuc->idLoaiTin)->take(4)->get();
        return view('pages.tintuc',["tintuc"=>$tintuc, "tinnoibat"=>$tinnoibat, "tinlienquan"=>$tinlienquan]);
    }

    public function getdangnhap()
    {
        return view('pages.dangnhap');
    }

    public function postdangnhap(Request $request)
    {
        $this->validate($request,
          [
            'password' => 'required|min:3|max:32',
          ],
          [
            'password.required' => 'Bạn chưa nhập password',
            'pasword.min' => 'password phải có từ 3 cho đến 32 ký tự',
            'pasword.max' => 'password phải có từ 3 cho đến 32 ký tự',
          ]);
      if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
      {
          return redirect('trangchu');
      }else{
          return redirect('dangnhap')->with('thongbao','Đăng nhập không thành công');
      }
    }

   public function getDangxuat()
    {
        Auth::logout();
        return redirect('trangchu');
    }

    public function getNguoidung()
    {
        return view('pages.nguoidung');
    }

    public function postNguoidung(Request $request)
    {
        $this->validate($request,
          [
            'name' => 'required|min:3',
          ],
          [
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'name.min' => 'Tên người dùng phải có ít nhất 3 ký tự',

          ]);
        $user = Auth::user();
        $user->name = $request->name;

        if ($request->changePassword == "on") {
            $this->validate($request,
              [
                'password' => 'required|min:3|max:32',
                'passwordAgain' => 'required|same:password'
              ],
              [
                'password.required' => 'Bạn chưa nhập password',
                'pasword.min' => 'password phải có từ 3 cho đến 32 ký tự',
                'pasword.max' => 'password phải có từ 3 cho đến 32 ký tự',

                'passwordAgain.required' => 'Bạn chưa nhập lại password',
                'passwordAgain.same' => 'Mật khẩu nhập lại chưa khớp',
              ]);
            $user->password = bcrypt($request->password);
        }
        $user->save();
        return redirect("nguoidung")->with('thongbao', 'Bạn đã sửa thành công');

    }

    public function getDangky()
    {
        return view('pages.dangky');
    }
    public function postDangKy(Request $request)
    {
        $this->validate($request,
          [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:3|max:32',
            'passwordAgain' => 'required|same:password'
          ],
          [
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'name.min' => 'Tên người dùng phải có ít nhất 3 ký tự',

            'email.required' => 'Bạn chưa nhập email',
            'email.email' => 'Bạn chưa nhập đúng email',
            'email.unique' => 'email đã tồn tại',

            'password.required' => 'Bạn chưa nhập password',
            'pasword.min' => 'password phải có từ 3 cho đến 32 ký tự',
            'pasword.max' => 'password phải có từ 3 cho đến 32 ký tự',

            'passwordAgain.required' => 'Bạn chưa nhập lại password',
            'passwordAgain.same' => 'Mật khẩu nhập lại chưa khớp',
          ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->quyen = 0;
        $user->save();
        return redirect("dangky")->with('thongbao', 'đăng ký thành công');
    }

    public function timkiem(Request $request)
    {
        $tukhoa = $request->tukhoa;
        $tintuc = TinTuc::where('TieuDe','like',"%$tukhoa%")->orwhere('TomTat','like',"%$tukhoa%")->orwhere('NoiDung','like',"%$tukhoa%")->take(30)->paginate(5);
        return view('pages.timkiem',["tintuc"=>$tintuc,"tukhoa"=>$tukhoa]);
    }
}
