<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class baseController extends Controller
{
    public static function actionHome() {
        return 'Đang cập nhật';
    }
    public static function actionLogin() {
        return view('base.login');
    }
    public static function runLogin(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'pass' => 'required',
        ],
        [
          'email.required'=>'Tài khoản email không được để trống!',
          'email.email'=>'Email không đúng định dạng!',
          'pass.required'=>'Mật khẩu không được để trống!',
        ]);
        if(Auth::attempt(['email' => $request->email, 'password' => $request->pass], $request->remember)){
            return redirect()->route('index')->with('thongbao', 'Đăng nhập vào hệ thông thành công')->with('type', 'success');
        }else{
            return redirect()->back()->withErrors(['Tài khoản hoặc mật khẩu không chính xác'])->withInput();
        }
    }
    public static function actionRegister() {
        return view('base.register');
    }
}
