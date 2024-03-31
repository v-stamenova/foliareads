<?php

namespace App\Http\Controllers;

use App\Models\RecommendationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function payForMonth($month)
    {
        //TODO: Add the Mollie code when bank details provided
        if (!in_array($month, ['April', 'May', 'June'])) {
            return redirect(route('dashboard'));
        }

        RecommendationRequest::create([
            'month' => $month,
            'client_id' => Auth::user()->id
        ]);

        return redirect(route('dashboard'))->with('status','Woahh');
    }
}
