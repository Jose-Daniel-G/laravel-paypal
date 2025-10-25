<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Omnipay\Omnipay;

class Paymen  extends Controller
{
   private $gateway;
    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_SANDBOX_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_SANDBOX_CLIENT_SECRET'));
        $this->gateway->setTestMode(true); //set it to false when go live    
    } 
    public function paypal(Request $request)
    {
        try {
            $response = $this->gateway->purchase([
                'amount'=>$request->amount,
                'currency'=>env('PAYPAL_CURRENCY'),
                'returnUrl'=>url('success'),
                'cancelUrl'=>url('error'),
            ])->send();

            if($response->isRedirect()){
                $response->redirect();
            }else{
                return $response->getMessage();
            }   
            
        } catch (\Throwable $th) {
           return $th->getMessage();
        }
    }
   public function success(Request $request)
    { 

        if ($request->input('paymentId') && $request->input('PrayerID')) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));
            $response = $transaction->send();
            if ($response->isSuccessful()) {
                $arr = $response->getData();

                // Insert transaction data into the database
                $payment = new Payment;
                $payment->payment_id = $arr['id'];
                $payment->payer_id = $arr['payer']['prayer_info']['payer_id'];
                $payment->payer_email = $arr['payer']['email_address'];
                $payment->amount = $arr['transactions'][0]['amount']['total'];
                $payment->currency =  env('PAYPAL_CURRENCY'); 
                $payment->payment_status = $arr['state'];
                $payment->save();
                return 'Pago exitoso. tu ID de transaccion es: '.$payment->payment_id;
                // return redirect()->back()->with('success','Pago exitoso. tu ID de transaccion es: '.$payment->payment_id);
            } else {
                return $response->getMessage();
            }
        } else {
            return redirect()->route('cancel');
        }
    }
    public function error()
    {
        return redirect()->back()->with('error','Pago cancelado!');
    }
    public function index(){
        return view('admin.payments.index');
    }
    //   public function create(){}  public function store(Request $request){}  public function show(Payment $payment){} public function edit(Payment $payment){} public function update(Request $request, Payment $payment){} public function destroy(Payment $payment){}
}
