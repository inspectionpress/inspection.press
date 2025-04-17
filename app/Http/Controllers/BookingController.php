<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Services\PricingService;
use Square\SquareClient;
use Square\Models\Money;
use Square\Models\CreatePaymentRequest;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'scheduled_at' => 'required|date',
            'nonce' => 'required'
        ]);

        $client = new SquareClient([
            'accessToken' => config('services.square.token'),
            'environment' => 'sandbox',
        ]);

        $amount = 10000; // $100.00 example, replace with calculated amount

        $money = new Money();
        $money->setAmount($amount);
        $money->setCurrency('USD');

        $paymentRequest = new CreatePaymentRequest(
            $request->nonce,
            uniqid(),
            $money
        );

        $apiResponse = $client->getPaymentsApi()->createPayment($paymentRequest);

        if ($apiResponse->isSuccess()) {
            $booking = Booking::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'scheduled_at' => $request->scheduled_at,
                'status' => 'confirmed',
            ]);
            return view('scheduler.success');
        } else {
            return back()->withErrors(['payment' => 'Payment failed.']);
        }
    }

    public function success()
    {
        return view('scheduler.success');
    }
}
