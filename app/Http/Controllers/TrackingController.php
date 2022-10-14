<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ShippingOrder;

class TrackingController extends Controller
{
    //

    public function getProductList($order){


        $sku_list=collect($order['goodsDtoList'])->map(function($item){
            return  $item['sku'];
        });
        $products=Product::whereIn('sku',$sku_list)->get();

            for ($i=0; $i <=count($order['goodsDtoList']) ; $i++)
            {
                if(!empty($order['goodsDtoList'][$i]['sku'])){
                $goodsDtoList[]=[
                    'name'=>!empty($order['goodsDtoList'][$i]['sku']) ?  $this->getproductTitle($order['goodsDtoList'][$i]['sku'],$products) : null,
                    'sku'=>!empty($order['goodsDtoList'][$i]['sku']) ? $order['goodsDtoList'][$i]['sku'] : null ,
                    'price'=>!empty($order['goodsDtoList'][$i]['price']) ? $order['goodsDtoList'][$i]['price'] : null ,
                    'num'=>!empty($order['goodsDtoList'][$i]['num']) ? $order['goodsDtoList'][$i]['num'] : null ,

                ];
             }
            }

      return isset($goodsDtoList) ? $goodsDtoList : null;
    }
    public function getOrderTrack(Request $request){

        $order = ShippingOrder::latest();
        if (!empty($request->order_no)) {
            $order = $order->where("customerBillCode", (int) $request->order_no)
                ->orWhere("customerBillCode", (string) $request->order_no)
                ->orWhere("trackingNumber", $request->order_no)
                ->whereIn("clientId", [4,36])
                ->first();
        }
        else
        $order=null;
        $goodsDtoList=[];

        if(!empty($order)){
            $goodsDtoList= $this->getProductList($order);
            $amount=collect($order['goodsDtoList'])->map(function($item){
                return  $item['num'] * $item['price'] ;
            });

            $amount=array_sum($amount->toArray());
            $discount_amount=!empty($order['cartDiscount']) ? $order['cartDiscount'] : 0.00 ;

        }
        $response=[
            'goodsDtoList'=>isset($goodsDtoList) ? $goodsDtoList  : null,
            'order'=>isset($order) ? $order  : null,
            'amount'=>isset($amount) ? $amount : 0.00,
            'discount_amount'=>isset($discount_amount) ? $discount_amount : 0.00,
        ];





        // if($request->v=="v3"){
        //     return view('tracking.index-v3',$response);
        // }
        // else{

        // }


        return view('tracking.index-v2',$response);
    }

    public function getproductTitle($sku, $products)
    {
        $products = collect($products);
        $products = $products->firstWhere("sku", $sku);
        return !empty($products->name) ? $products->name : null;
        // return  ;
    }
}
