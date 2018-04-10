<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth; // phải có lớp này mới có thể sử dụng để đăng nhập
class PagesController extends Controller
{
    //
	function __construct(){
		if(Auth::check()){
			view()->share('hosocanhan',Auth::user());
		}
	}

	public function getTrangchu(){
		return  view('pages.trangchu');
	}

	public function gioithieu(){
		return view('pages.gioithieu');
	}
	public function lienhe(){
		return view('pages.lienhe');
	}

	public function getDangnhap(){
		return view('pages.dangnhap');
	}

	public function postDangnhap(Request $request){
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
		$data = ['email'=>$request->email,'password'=>$request->password];
        // kiểm tra đăng nhập
		if(Auth::attempt($data)){
			return redirect('trangchu');
		}else{
			$request->session()->flash('loi', 'Đăng nhập thất bại');
			return redirect('dangnhap');
		}
	}

	public function dangxuat(){
		Auth::logout();
		return redirect('trangchu');
	}

	public function getdangky(){
		return view('pages.dangky');
	}
	public function postdangky(Request $request){

	}
}
