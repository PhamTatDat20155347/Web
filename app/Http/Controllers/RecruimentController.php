<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Post;
use App\Cv;
use App\Recruitment;
use App\Notification;
use App\Notifications\NotificationUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builde;
use Illuminate\Support\Facades\Auth; // phải có lớp này mới có thể sử dụng để đăng nhập
class RecruimentController extends Controller
{
    //
	function __construct(){
		$re = Recruitment::all();
		view()->share('re',$re);
	}
	public function danhsachcv(){
		$userid = Auth::user()->id;
		$recruitment = Recruitment::where('user','=',$userid)->paginate(5);
		return view('nhatuyendung.pages.danhsachcv',['recruitment'=>$recruitment]);

	}

	public function xemcv($cv_id,$id){
		//$cv = Cv::find($id);
		$re = Recruitment::find($id);
		$re->trangthai ="Đã xem";
		$re->save();

		$cv = Cv::find($cv_id);
		return view('nhatuyendung.pages.xemcv',['cv'=>$cv,'re'=>$re]);
	}
	public function chapnhancv($id,$idNTD,$idcv){
		$rec= Recruitment::find($id);
		$rec->trangthai ="Chấp nhận";
		$rec->save();
		$recruitment = Recruitment::where('user','=',$idNTD)->get();
		return view('nhatuyendung.pages.danhsachcv',['recruitment'=>$recruitment]);
	}

	public function Notification(Request $request){
		$request->validate([
			'comment' =>'required|min:4'
		]);

		Comment::create([
			'user_id'=>Auth::user()->id,
			'comment'=>$request->comment,
			"recruitment_id"=>$request->recruitment_id
		]);
		$recruitment = Recruitment::find($request->recruitment_id);
		User::find($recruitment->user->id)->notify(new NotificationUser($recruitment));

		Session::flash('status','Comment Succesfull');
		return redirect()->back();

	}

	public function get(){
		return Notification::all();
	}
}
