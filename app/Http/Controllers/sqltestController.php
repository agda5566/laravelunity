<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class sqltestController extends Controller
{
    //
    public function he(){
      return collect(DB::select("SELECT * FROM hello"));

    }
}
