<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class midtransController extends Controller
{
    
    public function paymentgateway()
    {
        //call initialize midtrans payment gateway
        $this -> initMidtrans();

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            ),

            //quantity error
            // 'item_details'=>array(
            //     "id" => "ITEM1",
            //     "price"=>10000,
            //     "quantity"=>1,
            //     "name"=>"abc",
            //     "brand"=>"def",
            //     "kategory"=>"ghi",
            //     "merchant_name"=>"jkl",
            // ),

            //firstname can't show up
            'customer_details'=>array(
                "firstname" => "hamdani",
                "last_name"=>"dika",
                "email"=>"abc@abc.com",
                "phone"=>"+6213456"
            )            
        );
        
        $snapToken = \Midtrans\Snap::getSnapToken($params);
       return view('bayar',['snapToken'=>$snapToken]);
    }
}
