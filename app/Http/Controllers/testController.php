<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

use Illuminate\Support\Facades\Auth;

class testController extends Controller
{
    //
    public function login(){

      $email = 'cat@gmail.com';
      $password = '1s';
      if (Auth::attempt(['email' => $email, 'password' => $password])){
        echo '登入成功';
      }
      else{
        echo '登入失敗';
      }
    }
    public function insert(){
      //if(Auth::check()==false)
      //{
    	 return view('test.insert');
      //}
      //else
    //  {
      //  return view('test.inserty');
    //  }
    }
    public function hisert(Request $request){
      $data = $request->all();
      $db=DB::select("SELECT username
                      FROM users
                      WHERE email ='".$data['email']."'");

            if(empty($db)){


            $insert=DB::table('users')->insert(
            [
            'email' => $data['email'],
            'password' =>  bcrypt($data['password']),

            ]
            );
            if($insert){
                echo '註冊 成功馬上跳轉登入畫面~~';
                //echo '<meta http-equiv=REFRESH CONTENT=1;url=member>';
            }else{
                // return Redirect::to('unityinser')
                //         ->withErrors(['fail'=>'註冊發生錯誤!']);
                return '註冊發生錯誤';
            }


            }else{
                // return \Redirect::to('unityinser')
                // ->withErrors(['email'=>'帳號重複!']);
                return '帳號重複';
            }
    }
}
