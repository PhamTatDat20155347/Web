<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth; // phải có lớp này mới có thể sử dụng để đăng nhập
class RecruitersController extends Controller
{

	public function getTest(){
		return view('test');
	}

	public function trangchu(){
		return view('nhatuyendung.pages.trangchu');
	}

	public function getdangky(){
		return view('nhatuyendung.pages.dangky');
	}
	public function postdangky(Request $request){
		$this->validate($request,
			[
				'username' => 'required|min:3',
				'email' => 'required|email|unique:users,email',
				'password'=>'required|min:3|max:32',
				'passwordAgain' =>'required|same:password'
			],
			[
				'username.required' => 'Bạn chưa nhập tên người dùng',
				'username.min' => 'Tên người dùng phải có ít nhất 3 kí tự',
				'email.required' => 'Bạn chưa nhập vào địa chỉ email',
				'email.email' =>'Bạn chưa nhập đúng định dạng email',
				'email.unique' =>'Email đã tồn tại',
				'password.required' => 'Bạn chưa nhập mật khẩu',
				'password.min' => 'Mật khẩu phải có ít nhất 3 kí tự',
				'password.max' => 'Mật khẩu chỉ được phép tối đa 32 kí tự',
				'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
				'passwordAgain.same' => 'Mật khẩu nhập lại chưa đúng'
			]);
		$user = new User;
		$user->username = $request->username;
		$user->email = $request->email;
		$user->password = bcrypt($request->password);
		$user->quyen = 1;
		$user->fullname=$request->fullname;
		$user->congty = $request->congty;
		$user->dienthoai= $request->dienthoai;
		$user->diachi=$request->diachi;
		$user->nghe=$request->nghe;


		$user->save();
		$request->session()->flash('thongbao', 'Bạn đã đăng ký thành công!');
		return redirect('nhatuyendung/dangky');
	}

	public function getdangnhap(){
		return view('nhatuyendung.pages.dangnhap');
	}
	public function postdangnhap(Request $request){
		$this->validate($request,
			[
				'email' =>'required',
				'password'=>'required|min:3|max:32'
			],
			[
				'email.required' => 'Bạn chưa nhập email',
				'password.required' => 'Bạn chưa nhập password',
				'password.min' => 'Password không được nhỏ hơn 3 kí tự',
				'password.max' =>'Password không được lớn hơn 32 kí tự'
			]);

		$data = ['email'=>$request->email,'password'=>$request->password,'quyen'=>1];
        // kiểm tra đăng nhập
		if(Auth::attempt($data)){
			return redirect('nhatuyendung/trangchu');
		}else{
			$request->session()->flash('loi', 'Đăng nhập thất bại');
			return redirect('nhatuyendung/dangnhap');
		}
	}
	public function getthongtin(){
		return view('nhatuyendung.pages.thongtin');
	}

	public function postthongtin(Request $request){
		$this->validate($request,
			[
				'username' => 'required|min:3'
			],
			[
				'username.required' => 'Bạn chưa nhập tên người dùng',
				'username.min' => 'Tên người dùng phải có ít nhất 3 kí tự'
			]);
		$user = Auth::user();
		$user->username = $request->username;


		if($request->checkpassword == "on"){
			$this->validate($request,
				[
					'password'=>'required|min:3|max:32',
					'passwordAgain' =>'required|same:password'
				],
				[
					'password.required' => 'Bạn chưa nhập mật khẩu',
					'password.min' => 'Mật khẩu phải có ít nhất 3 kí tự',
					'password.max' => 'Mật khẩu chỉ được phép tối đa 32 kí tự',
					'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
					'passwordAgain.same' => 'Mật khẩu nhập lại chưa đúng'
				]);
			$user->password = bcrypt($request->password);
		}

		$user->fullname=$request->fullname;
		$user->congty = $request->congty;
		$user->dienthoai= $request->dienthoai;
		$user->diachi=$request->diachi;
		$user->nghe=$request->nghe;
		$user->save();
		$request->session()->flash('thongbao', 'Bạn đã sửa thành công!');
		return redirect('nhatuyendung/thongtin');
	}
	public function dangxuat(){
		Auth::logout();
		return redirect('nhatuyendung/trangchu');
	}
	public function dangxuatAll(){
		Auth::logout();
		return redirect('trangchu');
	}
}
