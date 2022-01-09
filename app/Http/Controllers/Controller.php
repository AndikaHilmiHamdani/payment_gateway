<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //midtrans bugs

    // public function initPaymentGateway()
    // {
    //    // Set your Merchant Server Key
    //    Veritrans_Config::$serverKey = 'SB-Mid-server-eUV-IAeZn_aXDtqQGyyj4jea';
    //    // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
    //    Veritrans_Config::$isProduction = false;
    //    // Set sanitization on (default)
    //    Veritrans_Config::$isSanitized = true;
    //    // Set 3DS transaction for credit card to true
    //    Veritrans_Config::$is3ds = true;
    // }
}
