<?php

/*
|-----------------d---------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	
    return view('auth.login');
});

// Auth route

Route::get('cp-login', 'Auth\LoginController@login')->name('login');

Route::post('cp-login', 'Auth\LoginController@postLogin');
Route::any('logout', function(){
	Auth::logout();
	return redirect(route('login'));
})->name('logout');






Route::view('metronic', 'layouts.metronictheme');

use Illuminate\Support\Facades\Mail;
Route::get('send-email', function(){
	// đăng nhập vào mail cần làm server=> tài khoản google => đăng nhập và bảo mật => cho phép ứng dụng kém an toàn : Bật (cho phép gửi phần mềm từ bên thứ 3)
	$username = 'thienth';
	//dd($username);
	Mail::send('mail_template.test-send-mail', compact('username'),function($message){
		$message->to('nvqk0209@gmail.com', 'Ok.nvqk'); // gửi đến ai và gán tên
		$message->cc('tranthanhhauinb@gmail.com', 'Ok.Tranthanh'); // gửi kèm đến ai và gán tên
		$message->replyto('quockhanhstyle@gmail.com', 'Mr.Khanh'); // email sẽ nhận phản hồi từ các email được gửi đi
		$message->subject('This is mail header'); // mail header
	});

	// chú ý trong file nội dung chứa html muốn thêm js css thì viết trong file đấy luôn và cũng ko được extend layout nào nếu ko sẽ die
	return 'done';
});

use Illuminate\Http\Request;
use App\Models\PasswordReset;
use Carbon\Carbon;
use App\User;

Route::post('forget-pwd-email', function(Request $request){
	$email = $request->email;
	$pwdReset = PasswordReset::where('email', $request->email)->delete();
	$user = App\User::where('email', $email)->first();
	if(!$user)
	{
		return 'Done !'; // không thấy user thì ko gửi
	}
	$token = str_random(20);
	//dd($token);
	$now = Carbon::now();
	//dd($now);
	$pwdReset = new PasswordReset();
	$pwdReset->email = $request->email;
	$pwdReset->token = $token;
	$pwdReset->created_at = $now;
	$pwdReset->save();
	
	$url = url('/reset-pwd/' . $token);


	//send mail
	Mail::send('mail_template.reset-password-mail', compact('url', 'user'),function($message) use ($user){
		$message->to($user->email, $user->name); // gửi đến ai và gán tên
		$message->subject('Yêu cầu cấp lại mật khẩu'); // mail header
	});
	return 'Done!';
	
})->name('forget-pwd.email');

Route::get('reset-pwd/{token}', function($token){
	//dd($token);
	// check token co hop le hay khong
	$pwdReset = PasswordReset::where('token', $token)->first();
	if(!$pwdReset){
		return "error! invalid token";
	}
	$thatDay = Carbon::createFromFormat('Y-m-d H:i:s', $pwdReset->created_at);
	//dd($thatDay);
	$now = Carbon::now();
	$dif = $now->diffInHours($thatDay);
	if($dif > 24) // quá 24h xóa token
	{
		DB::table('password_resets')->where('token', $token)->delete();
		return "error! invalid token";
	}
	return view('auth.reset-pwd', compact('token'));
});

Route::post('auth-reset-password', function(Request $request) {
    $pwdReset = PasswordReset::where('token', $request->token)->first();
	if(!$pwdReset){
		return "error! invalid token";
	}
	$thatDay = Carbon::createFromFormat('Y-m-d H:i:s', $pwdReset->created_at);
	$now = Carbon::now();
	$dif = $now->diffInHours($thatDay);
	if($dif > 24){
		DB::table('password_resets')->where('token', $token)->delete();
		return "error! invalid token";
	}

	$user = User::where('email', $pwdReset->email)->first();
	$user->password = Hash::make($request->password);
	$user->save();
	return "Done!";
})->name('auth.reset-pwd');