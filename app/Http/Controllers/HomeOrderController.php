<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;


class HomeOrderController extends Controller
{
    /**
     *购物车
     */
    public function getIntocart(Request $request)
    {
    	$goodsid = $request->goodsid;
    	session()->push('cart',$goodsid);
    	$goodsname = DB::table('goods_table')->where('goodsid',$goodsid)->value('goodsname');

    	echo $goodsname;
    }

    public function getSelectcart()
    {
    	$cartall = session('cart');
        // dd($cartall);
        if ($cartall == null) {
            $carts = null;
            return view('homes.cart',['carts' => $carts]);            
        }
    	
		$cart = array_count_values($cartall);
    	$carts = [];
    	$cartlist = [];
    	foreach ($cart as $k =>$v) {

    		$goods = DB::table('goods_table')->where('goodsid',$k)->first();
    		$goodspic = DB::table('goods_pic_table')->where('goodsid',$k)->value('picurl');
    		$cartlist = ['goodsid'=> $k, 'goodspic'=>$goodspic, 'goodsname'=>$goods->goodsname, 'goodsprice'=>$goods->goodsprice,'goodsnum'=>$v];
			$carts[] = $cartlist;

    	}
		return view('homes.cart',['carts'=>$carts]);
	}

	public function getCartlist(Request $request)
	{
		$id = $request->id;
		$res = \Session::get('cart');
    	foreach($res as $k => $v) {

    		if($v == $id) {

    			\Session::forget('cart.'.$k);

    			return '1';

    		}

    	
    	return '0';
	}
    //提交订单页面写在路由里面
    public function billing(Request $request)
    {
        $buylist = $request->goodsid;
        foreach($buylist as $v){
            $goods = explode('+',$v);
            //查询商品信息
            $goodsinfo = DB::table('goods_table')->where('goodsid',$goods[0])->first();
            $goodsinfo->pic = DB::table('goods_pic_table')->where('goodsid',$goods[0])->value('picurl');

            $goodsinfo->num = $goods[1];
            $buyorder[] = $goodsinfo;

        }

        //用户信息 用户地址
        $userid = session('user')['userid'];
        $useraddrs = DB::table('user_address')->where('userid',$userid)->get();
        $i = 1;
        foreach($useraddrs as $k => $v){
            if ($v->status == 1) {

                $addr[0] = $v->name.' '.$v->province.$v->city.$v->street.' '.$v->phone;
            }
            $addr[$i] = $v->name.' '.$v->province.$v->city.$v->street.' '.$v->phone;

            $i++;
        }
        return view('homes.order_reply',['buyorder'=>$buyorder,'addr'=>$addr]);

    }

    public function postInputorder(Request $request)
    {
        //获取需要填入数据库的值
        $res['userid'] = session('user')['userid'];
        $res['passstatus'] = 3;
        $res['ordertime'] = time();
        $buyGoods = $request->input('goodsid');
        $addr = $request->input('addr');
        $res['orderprice'] = $request->input('total');
        //切割商品编号
        $goodsid = '';
        foreach ($buyGoods as $value) {
            # code...
            $goodid = explode('+',$value)[0];
            $goodsid = $goodsid . ',' . $goodid;
        }
        $res['goodsid'] = substr($goodsid,1);
        //切割地址
        $res['getaddress'] = explode(' ',$addr)[1];
        $res['getphone'] = explode(' ',$addr)[2];
        $res['getman'] = explode(' ',$addr)[0];
        //创建订单 , 插入数据库
        $orderid = DB::table('order_table')->insertGetId($res);

        if ($orderid) {

            //删除已下单的购物车中的商品
            $info = \Session::get('cart');
            // dd($info);
            foreach($info as $k => $v) {

                if(in_array($v, explode(',', $goodsid), true)) {

                    \Session::forget('cart.'.$k);
                }
            }

            if ($request->input('paymethod')) {
                # code...
                return view('homes.alipay');

            } else {
                $usermoney = DB::table('user_table')->where('userid',\Session::get('user')['userid'])->value('usermoney');
                $yue = $usermoney-$request->input('total');
                if ( $yue >= 0) {
                    //余额足够,支付成功进入用户订单页面
                    DB::table('user_table')->where('userid',\Session::get('user')['userid'])->update(['usermoney' => $yue]);
                    $a = DB::table('order_table')->where('orderid',$orderid)->update(['passstatus' => 0]);
                    return redirect('/user/order');
                } else {
                    //余额不足跳转到订单页面
                    return redirect('/user/order')->with('info','抱歉!!!您的余额不足,请选择其他支付方式或充值后重试!!');
                }
            }

        }else{
            return redirect('/order/selectcart')->with('info','抱歉!!!系统异常,下单失败,请稍后重试!!');
        }

    }
    
}
