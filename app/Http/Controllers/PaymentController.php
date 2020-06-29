<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
use App\Product;
use App\User;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Payment;
use App\Certificate;
class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function paymentProduct(Request $request){
        $product=Product::where('id',$request->product_id)->first();
        $user_id=Auth::id();
        $user=User::where('id',$user_id)->first();
        if($user->member ==1){
            $price=$product->price_member;
        }
        else{
            $price=$product->price_user;
        }
        $data = [];
        $data['items'] = [
            [
                'name' => $product->name,
                'price' => $price,
                'desc'  => 'Selling Products',
                'qty' => 1,
            ]
        ];

        $data['invoice_id'] = uniqid();
        $data['invoice_description'] = "Order Invoice";
        $data['return_url'] = route('payment.success',$request->product_id);
        $data['cancel_url'] = route('payment.cancel');
        $data['total'] = $price;
        
        $provider = new ExpressCheckout;
        $response = $provider->setExpressCheckout($data);
        return redirect($response['paypal_link']);

    }

    public function cancel()
    {
        return view('User.Pages.cancel');
    }

    public function success(Request $request,$id)
    {   
    
        $product=Product::where('id',$id)->first();
        $user_id=Auth::id();
        $user=User::where('id',$user_id)->first();
        if($user->member ==1){
            $price=$product->price_member;
        }
        else{
            $price=$product->price_user;
        }
        $data = [];
        $data['items'] = [
            [
                'name' => $product->name,
                'price' => $price,
                'desc'  => 'Selling Products',
                'qty' => 1,
            ]
        ];

        $data['invoice_id'] = uniqid();
        $data['invoice_description'] = "Order Invoice";
        $data['return_url'] = route('payment.success',$id);
        $data['cancel_url'] = route('payment.cancel');
        $data['total'] = $price;

      
        $provider = new ExpressCheckout;
        $response = $provider->getExpressCheckoutDetails($request->token);
        
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {

            $payment_status = $provider->doExpressCheckoutPayment($data, $request->token, $request->PayerID);
    
            $status = $payment_status['PAYMENTINFO_0_PAYMENTSTATUS'];

            if(in_array($status, ['Completed','Processed'])){
                $payment=new Payment();
                $payment->user_id=$user_id;
                $payment->product_id=$id;
                $payment->payerId=$request->PayerID;
                $payment->token=$request->token;
                $payment->price=$price;
                $payment->invoice_id=$data['invoice_id'];
                $payment->sell_type=1;
                $payment->save();
                return view('User.Pages.successful');
            }
            
                
        }
  
        return view('User.Pages.cancel');
    }


    public function certificatePayment(Request $request){

        $certificate=Certificate::where('id',$request->certificate_id)->first();
        $user_id=Auth::id();
        $user=User::where('id',$user_id)->first();
        $price=$certificate->fees;
        $data = [];
        $data['items'] = [
            [
                'name' => $certificate->name,
                'price' => $price,
                'desc'  => 'Selling Certificates',
                'qty' => 1,
            ]
        ];

        $data['invoice_id'] = uniqid();
        $data['invoice_description'] = "Order Invoice";
        $data['return_url'] = route('certificate.payment.success',$request->certificate_id);
        $data['cancel_url'] = route('payment.cancel');
        $data['total'] = $price;
        
        $provider = new ExpressCheckout;
        $response = $provider->setExpressCheckout($data);
        return redirect($response['paypal_link']);
    }
    
    public function successCertificate(Request $request,$id)
    {   
        $certificate=Certificate::where('id',$id)->first();

        $user_id=Auth::id();
        $user=User::where('id',$user_id)->first();
        $price=$certificate->fees;
        $data = [];
        $data['items'] = [
            [
                'name' => $certificate->name,
                'price' => $price,
                'desc'  => 'Selling Certificates',
                'qty' => 1,
            ]
        ];

        $data['invoice_id'] = uniqid();
        $data['invoice_description'] = "Order Invoice";
        $data['return_url'] = route('certificate.payment.success',$id);
        $data['cancel_url'] = route('payment.cancel');
        $data['total'] = $price;

      
        $provider = new ExpressCheckout;
        $response = $provider->getExpressCheckoutDetails($request->token);
        
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {

            $payment_status = $provider->doExpressCheckoutPayment($data, $request->token, $request->PayerID);
    
            $status = $payment_status['PAYMENTINFO_0_PAYMENTSTATUS'];

            if(in_array($status, ['Completed','Processed'])){
                $payment=new Payment();
                $payment->user_id=$user_id;
                $payment->product_id=$id;
                $payment->payerId=$request->PayerID;
                $payment->token=$request->token;
                $payment->price=$price;
                $payment->invoice_id=$data['invoice_id'];
                $payment->sell_type=2;
                $payment->save();
                return view('User.Pages.successful');
            }
            
                
        }
  
        return view('User.Pages.cancel');
    }
}
