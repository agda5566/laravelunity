<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class sqltestController extends Controller
{
    //
    public function he(){
      return collect(DB::select("SELECT id,name,passwork FROM cus"));

    }
    public function she(){
      $users=DB::table('cus')->get();
			return \View::make('green')->with('users',$users);
    }
    public function unity(){
      // $a='cat@gmail.com';
      // $b='bigda';
      // $c='123456'
      // //$d='';
      $insert=DB::table('score')->insert(
    			[
    			'email'=>'cat@gmail.com',
    			'username'=>'bigda',
          'password'=>bcrypt('123456')
          //'remember_token'=>$d
    			]
    			);
    		if($insert)
    		{
    			echo '成功';
    		}

    		else
    		{
    			echo '失敗';
    		}
    }
}
