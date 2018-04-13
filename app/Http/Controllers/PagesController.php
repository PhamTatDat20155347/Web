<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cv;
use Illuminate\Support\Facades\Auth; // phải có lớp này mới có thể sử dụng để đăng nhập
class PagesController extends Controller
{
    //
	function __construct(){
		$cv = Cv::all();
		view()->share('cv',$cv);
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
		$this->validate($request,
			[
				'username' => 'required|min:3',
				'email' => 'required|email|unique:users,email',
				'password'=>'required|min:3|max:32',
				'passwordAgain' =>'required|same:password',
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
		$user->fullname = $request->fullname;
		$user->quyen = 0;
		$user->save();

		$cv = new Cv;
		$cv->users_id = $user->id;
		$cv->email= $user->email;
		$cv->fullname = $user->fullname;
		$cv->save();

		$userid = User::find($user->id);


		$request->session()->flash('thongbao', 'Bạn đã đăng ký thành công! Bây giờ hãy hoàn thành đầy đủ thông tin cá nhân');

		$data = ['email'=>$request->email,'password'=>$request->password];
        // kiểm tra đăng nhập
		Auth::attempt($data);
		return view('pages.taohoso',['userid'=>$userid]);
	}
	public function posttaohoso(Request $request){

		$cv = Auth::user()->cv;
		$cv->fullname=$request->fullname;
		$cv->birthday=$request->birthday;
		$cv->email=$request->email;
		$cv->phone=$request->phone;
		$cv->education=$request->education;
		$cv->gender=$request->gender;
		$cv->job_position=$request->job_position;
		$cv->information=$request->infomation;
		$cv->skill=$request->skill;
		$cv->experience=$request->experience;
		$cv->project=$request->project;
		$cv->status=$request->status;

		if($request->hasFile('Hinh')){
			$file = $request ->file('Hinh');
			$duoi = $file->getClientOriginalExtension();
			if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'JPG'){
				$request->session()->flash('loi', 'Bạn chỉ được chọn file jpg,png');
				return redirect('pages.dangky');
			}
			$name = $file->getClientOriginalName();
			$Hinh = str_random(4)."_".$name;
			while(file_exists("upload/cv/".$Hinh)){
				$Hinh = str_random(4)."_".$name;
			}
    		//echo $Hinh;
			$file->move("upload/cv",$Hinh);
			$cv->Hinh = $Hinh;
		}else{
			$cv->Hinh="";
		}


		$cv->save();
		return redirect('trangchu');
	}
	public function getHosocanhan(){
		return view('pages.hosocanhan');
	}
	public function postHosocanhan(Request $request){
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
		$user->fullname= $request->fullname;

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

		$user->save();
		$request->session()->flash('thongbao', 'Bạn đã sửa thành công!');
		return redirect('hosocanhan');
	}

	public function getHosoxinviec(){
		return view('pages.hosoxinviec');
	}

	public function getTest(){
		return view('pages.taohoso');
	}

	public function postHosoxinviec(Request $request){
		$cv = Auth::user()->cv;
		$cv->fullname=$request->fullname;
		$cv->birthday=$request->birthday;
		$cv->email=$request->email;
		$cv->phone=$request->phone;
		$cv->education=$request->education;
		$cv->gender=$request->gender;
		$cv->job_position=$request->job_position;
		$cv->information=$request->infomation;
		$cv->skill=$request->skill;
		$cv->experience=$request->experience;
		$cv->project=$request->project;
		$cv->status=$request->status;

		if($request->hasFile('Hinh')){
			$file = $request ->file('Hinh');
			$duoi = $file->getClientOriginalExtension();
			if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'JPG'){
				$request->session()->flash('loi', 'Bạn chỉ được chọn file jpg,png');
				return redirect('hosoxinviec');
			}
			$name = $file->getClientOriginalName();
			$Hinh = str_random(4)."_".$name;
			while(file_exists("upload/cv/".$Hinh)){
				$Hinh = str_random(4)."_".$name;
			}
    		//echo $Hinh;
			unlink("upload/cv/".$cv->Hinh);
			$file->move("upload/cv",$Hinh);
			$cv->Hinh = $Hinh;
		}

		$cv->save();
		return redirect('hosoxinviec');
	}
}
