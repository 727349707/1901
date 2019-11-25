<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
class LoginController extends Controller
{
    //登录页面
    public function login(){
        return view('admin.login');
    }


    public function login_do()
    {
        $u_email = request()->u_email;
        // dd($u_email);
        $u_pwd = request()->pwu_pwdd;
        $u_pwd=md5($u_pwd);
        // dump($u_email);
        // dd($u_pwd);
        // ffff
        $res=DB::table('user')->where('u_email','=',$u_email)->where('u_pwd','=',$u_pwd)->first();
        // dd($res);
        if($res){
            session(['u_email'=>$u_email]);
           
    
            echo json_encode(['code'=>1,'font'=>'登录成功']);
        }else{
            echo json_encode(['code'=>2,'font'=>'登录失败']);
            //sdddddd
        } 
    }


    //退出
    public function logout(){
        // echo "别点了自己做";
        request()->session()->forget('u_email');
        return redirect('/login');
    }
}
