<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Receipt;
use Carbon\Carbon;
use PDF;


class PDFreceiptController extends Controller
{
    //
    public function preview()
    {
        if (auth()->user()) {
            $user_id= auth()->user()->id;
            
           $recipetDetails= Receipt::where('user_id', $user_id)
           ->get();
           $current = Carbon::now();
           $pdfConver=true;
            
            return view('preview',[
            //'serviceList' => $serviceList,
            'recipetDetails'=> $recipetDetails,
                 'current' => $current,
                 'pdfConver'=>$pdfConver,
            ]);
    
        } else{
            return redirect('/singin');
        }
    
        //return view('preview');
    }

    public function generatePDF()
    {
        if (auth()->user()) {
            $user_id= auth()->user()->id;
            
           $recipetDetails= Receipt::where('user_id', $user_id)
           ->get();
           $current = Carbon::now();
           $pdfConver=false;
            
             $pdf = PDF::loadView('printPreview',[
            //'serviceList' => $serviceList,
            'recipetDetails'=> $recipetDetails,
                 'current' => $current,
                 'pdfConver'=>$pdfConver,
            ]);
        return $pdf->download('eBook_Culb_reciept.pdf');

    
        } else{
            return redirect('/singin');
        }


       /* $pdf = PDF::loadView('preview');    
        return $pdf->download('gapLink_Receipt.pdf');
        */
    }

    public function viewReceipt(){
        
        if (auth()->user()) {
        $user_id= auth()->user()->id;
     
       $recipetDetails= Receipt::where('user_id', $user_id)
       ->get();
       $current = Carbon::now();
       $pdfConver=false;
        return view('paymentdetails',[
        //'serviceList' => $serviceList,
        'recipetDetails'=> $recipetDetails,
             'current' => $current,
             'pdfConver'=> $pdfConver,
        ]);

    } else{
        return redirect('/singin');
    }
}

}
