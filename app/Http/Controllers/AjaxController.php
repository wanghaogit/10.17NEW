<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AjaxController extends Controller
{
    //颜色
    public function color(Request $request)
    {
    	$id = $request->id;
    	$Pic = \DB::table('goodsInfo')->where('id',$request->id)->get();
    	return $Pic;
    }
    //订单生成
    public function order(Request $request)
    {
    	return $request;
    }
}
