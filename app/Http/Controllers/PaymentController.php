<?php
/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
}
*/


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Paystack;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }        
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
        if (auth()->user()) {
        if($paymentDetails['status']){
            // insert the datas here and pupolate the a tabel of recept 
            // and redirect to fetch 
             $findUser= User::find($user_id);
             /*$findUser->prem_user=true;
             $findUser->save();
             */
              
             $receiptGen = Receipt::create([
             // 'name' => 'London to Paris',
              'first_name' => $findUser->name,
              'last_name'=>$findUser->last_name ,
              'department'=> $findUser->department , 
              //'country_cod' => $findUser->countryCode,
              'phoneNum'=> $findUser->phoneNum,
              'Reg_no'=> $findUser->Reg_no ,
              'trans_id'=> $paymentDetails['data']['id'] ,
              'amount' => $paymentDetails['data']['amount'],
              'email' => $paymentDetails['data']['customer']['email'],
              'fees' => $paymentDetails['data']['fees'],
              'user_id'=> $user_id,
             // 'Receipt_plan' =>$typeOfUser,
              'enabled' => true,
          ]);
      
          $test= User::find($user_id);
          $test->paid_status=true;
          $test->save();
      
          return redirect('/booksList');
             }else{
                  return redirect('/premium');
             }

            } else{
                return redirect('/singin');
             }
     
     
    
    }
}
