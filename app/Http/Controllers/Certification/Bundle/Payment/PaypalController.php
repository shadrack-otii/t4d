<?php

namespace App\Http\Controllers\Certification\Bundle\Payment;

use App\PaypalPayment;
use App\Payment;
use App\CertificationBundleBooking;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\PaypalTrait;
use Session;

class PaypalController extends Controller
{
    use PaypalTrait;

    /** 
     * Request customer to make payment.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function create(Payment $payment)
    {
        $response = $this->createPayment(

            $payment->amount,
            $payment->currency, 
            route('certification.bundle.payment.paypal.execute'),
            route('certification.bundle.payment.paypal.cancel', $payment)
        );

        if ( $response['status'] == 'failed' ) {

            Session::flash('error', 'Failed to request payment. Please try again');

            return redirect()->route('certification.bundle.show', $payment->item->certification_bundle_id);
        }

        $payment->paypal()->create($response);

        return redirect( $response['approval_url'] );
    }

    /** 
     * Save payment after customer approves.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function execute(Request $request)
    {
        $paypal_payment = PaypalPayment::wherePaymentId($request->paymentId)->with('item_payment')->first();

        $response = $this->executePayment(

            $request->paymentId,
            $request->PayerID
        );

        if ( $response['status'] == 'failed' ) {

            $paypal_payment->delete();

            Session::flash('error', 'Your payment approval has been canceled');
        }
        else {

            $paypal_payment->update($response);

            # set payment status as complete on paypal observer class

            Session::flash('success', 'Payment has been received');
        }

        return redirect()->route('certification.bundle.show', $paypal_payment->item_payment->item->certification_bundle_id);
    }

    /**
     * Cancel payment after failure.
     * 
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function cancel(Payment $payment)
    {
        $payment->paypal()->delete();

        return redirect()->route('certification.bundle.show', $payment->item->certification_bundle_id)->with('error', 'Your payment has been canceled.');
    }
}
