<?php

namespace App\Http\Controllers;
use App\Http\Controllers\NhaTuyenDungController;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Hash;

class NhaTuyenDungController extends Controller
{

	public function page_recruiter(){
		return view('pages_recruiter.recruiter_index');
	}

	public function getdangkyntd(){
		return view ('pages_recruiter.dangkyntd');
	}

	public function postdangkyntd(Request $request){
    	$this->validate($request,
    		[
    			'email'		=>'required|email|unique:users,email',
    			'password'	=>'required|min:6|max:20',
    			'username'	=>'required|unique:users,username',
    		],

    		[
    			'email.required'	=>'Vui lòng nhập email',
    			'email.email'		=>'Không đúng định dạng email',
    			'email.unique'		=>'Email đã có người sử dụng',
                'username.unique'       =>'Tên đã có người sử dụng',
    			'password.required'	=>'Vui lòng nhập password',
    			'username.required'		=>'Vui lòng nhập tên',
                'username.unique'       =>'Tên tài khoản đã tồn tại',
    			'password.min'		=>'Mật khẩu ít nhất 6 kí tự',
    			'password.max'		=>'Mật khẩu nhiều nhất 20 kí tự'
    		]
    	);
    	$users = new User();
    	$users->username 	= $request->username;
    	$users->email   =$request->email;
    	$users->password= Hash::make($request->password);
        $users->fullname    = $request->fullname;
    	$users->quyen = 2; 
    	$users->save();
    	return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }


    public function ListPost()
    {
    	$listpost = Post::all();
    	return view('pages_recruiter.listpost', compact('listpost'));
    }

    public function getAddPost()
    {
    	return view('pages_recruiter.addPost');
    }

    public function AddPost(Request $request)
    {
       $this->validate($request,
            [
                'congty'    =>'required',
                'title'     => 'required'
            ],
            [
                'congty.required'    =>'Vui lòng nhập tên công ty',
                'title.required'    =>'Vui lòng title'
            ]
        );
        $p = new Post();
        $p->congty = $request->congty;
        $p->user_id =1;
        $p->title = $request->title;
        $p->description = $request->description;
        $p->content = $request->content;
        $p->keywork = $request->keyword;
        $p->category_id = $request->category_id;
        $p->save();
        return redirect()->back()->with('thanhcong','Thêm Post thành công'); 
    }

    public function getUpdatePost($idpost)
    {
        $post = Post::find($idpost);
        return view('pages_recruiter.updatePost',compact('post'));
    }

    public function UpdatePost($idpost, Request $request)
    {
        $this->validate($request,
            [
                'congty'    =>'required',
                'title'     => 'required'
            ],
            [
                'congty.required'    =>'Vui lòng nhập tên công ty',
                'title.required'    =>'Vui lòng title'
            ]
        );
        $p = Post::find($idpost);
        $p->congty = $request->congty;
        $p->user_id =1;
        $p->title = $request->title;
        $p->description = $request->description;
        $p->content = $request->content;
        $p->keywork = $request->keyword;
        $p->category_id = $request->category_id;
        $p->save();
        return redirect()->back()->with('thanhcong','Sửa Post thành công'); 
    }

    public function getDeletePost($idpost)
    {
        $post = Post::find($idpost)->delete();
        return redirect()->back();
    }
}
