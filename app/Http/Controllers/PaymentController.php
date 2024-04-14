<?php

namespace App\Http\Controllers;

use App\Models\RecommendationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mollie\Laravel\Facades\Mollie;

class PaymentController extends Controller
{
    public function preparePayment($month)
    {
        if(Auth::user()->hasRole('admin')) {
            abort(403);
        }

        if (!in_array($month, ['April', 'May', 'June'])) {
            return redirect(route('dashboard'));
        }

        $payment = Mollie::api()->payments->create([
            'amount' => [
                'currency' => 'EUR', // Type of currency you want to send
                'value' => '1.99', // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            'description' => "Payment By " . Auth::user()->name . " for {$month}",
            'redirectUrl' => route('payment.success', $month), // after the payment completion where you to redirect
        ]);

        $payment = Mollie::api()->payments->get($payment->id);

        return redirect($payment->getCheckoutUrl(), 303);
    }

    public function successfulPayment($month)
    {
        RecommendationRequest::create([
            'month' => $month,
            'client_id' => Auth::user()->id
        ]);

        return redirect(route('dashboard'))->with('status','You successfully paid for the month of ' . $month);
    }
}
