<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KashierPaymentController extends Controller{
    public function pay(Request $request)
    {
        $mid = "MID-15317-280";
        $amount = "22";
        $currency = "EGP";
        $merchantOrderId = uniqid('', true); // Generates a unique order ID
        $secret = "86cdbe8b-ad34-4521-871d-98d59df58211";
        $baseUrl = 'https://checkout.kashier.io';
        $mode = "test";
        $allowedMethods = "card,wallet,bank_installments";
        $callbackUrl = urlencode(route('kashier.callback'));

        $hash = hash_hmac('sha256', "/?payment=" . $mid . "." . $merchantOrderId . "." . $amount . "." . $currency, $secret, false);

        return response()->json([
            'payURL' => $baseUrl . "?merchantId=" . $mid . "&orderId=" . $merchantOrderId . "&mode=" . $mode .
            "&amount=" . $amount . "&currency=" . $currency . "&hash=" . $hash . "&merchantRedirect=" . $callbackUrl .
            "&allowedMethods=" . $allowedMethods . "&display=en",
        ]);
    }

    public function callback(Request $request)
    {
        $secret = "86cdbe8b-ad34-4521-871d-98d59df58211";
        $queryString = "";

        foreach ($request->except(['signature', 'mode']) as $key => $value) {
            $queryString .= "&" . $key . "=" . $value;
        }

        $queryString = ltrim($queryString, $queryString[0]);
        $signature = hash_hmac('sha256', $queryString, $secret, false);

        if ($signature == $request->input("signature")) {
            return "Success signature";
        } else {
            return "Failed signature";
        }
    }
}
