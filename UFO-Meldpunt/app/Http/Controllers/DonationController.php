<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;

class DonationController extends Controller
{
    public function showForm()
    {
        return view('donate.form');
    }

    public function processDonation(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
            'email' => 'nullable|email',
        ]);

        // Create a Donor instance
        $donor = Donor::create([
            'email' => $request->email,
        ]);

        $stripeAmount = (int) ($request->amount * 100); // amount in cents

        // Create Stripe Checkout session
        $checkout = $donor->checkout([
            [
                'price_data' => [
                    'currency' => 'eur',
                    'unit_amount' => $stripeAmount,
                    'product_data' => [
                        'name' => 'Donation',
                    ],
                ],
                'quantity' => 1,
            ],
        ], [
            'mode' => 'payment',
            'success_url' => route('donate.thanks'),
            'cancel_url' => route('donate.form'),
        ]);

        return $checkout; // Redirects to Stripe Checkout
    }

    public function thankYou()
    {
        return view('donate.thanks');
    }
}
