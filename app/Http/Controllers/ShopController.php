<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ShopController extends Controller
{
    //显示购买详情页面
	public function show($id)
	{
		//查询详情表里goodsId = $id 的数据
		$list = \DB::table('goodsinfo')->where("goodsId",$id)->get();
		$name = \DB::table('goods')->where("id",$id)->get();
		// dd($list);
		//带着数据显示购买页
		return view('/shop',["list"=>$list],["name"=>$name]);
	}

}
