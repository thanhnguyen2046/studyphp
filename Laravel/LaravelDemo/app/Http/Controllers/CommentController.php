<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth; //add khi dung lop dang nhap

use App\Comment;
use App\TinTuc;

class CommentController extends Controller
{
    public function getXoa($id,$idTinTuc)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect('admin/tintuc/sua/'.$idTinTuc)->with('thongbaocomment','Bạn đã xóa thành công');
    }

    public function postComment(Request $request, $id)
    {
        $tintuc = TinTuc::find($id);
        $idTinTuc = $id;
        $comment = new Comment;
        $comment->idTinTuc = $idTinTuc;
        $comment->NoiDung = $request->NoiDung;
        $comment->idUser = Auth::user()->id;
        $comment->save();
        return redirect("tintuc/$id/".$tintuc->TieuDeKhongDau);
    }
}
