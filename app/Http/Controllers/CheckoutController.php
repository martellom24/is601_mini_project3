<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class CheckoutController extends Controller
{
    public function subscribe_process(Request $request)
    {
        try {
            Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

            $user = User::find(1);
            $user->newSubscription('main', 'Monthly')->create($request->stripeToken);

            return 'Subscription successful, you get the course!';

        } catch (\Exception $ex) {

            return $ex->getMessage();

        }

    }
}
