<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class loginRegController extends Controller
{
    //
    public function regPage(){
    
        return view('singUp');
    }

    public function singUp(Request $request){
    // return redirect('/');
    //dd($request);
    $request->validate([
        'name' => 'required',
        'email' => 'required|unique:Users|max:255',          //'required',
        'password'=> 'required',
        'last_name'=> 'required',
        'department'=> 'required',
        'phoneNum'=> 'required',
        'gender'=> 'required',
        'Reg_num'=>'required',
         'DOB'=> 'required',
         'avater_name' => 'mimes:png,jpg,jpeg|max:2048'
         /*'course'=> 'required',
         'address'=> 'required', */

    ]);
    if ($request->hasFile('avater_name')){
        $imageName = time().'_'.$request->file('avater_name')->getClientOriginalName();
                $filePath = $request->file('avater_name')->storeAs('uploads', $imageName, 'public');
   
    }else{
        $imageName='No_image.jpg';
    }
    $user=User::create([
        'name' => $request['name'],
            'email' => $request['email'],          
            'password'=> Hash::make($request['password']),
            'last_name'=> $request['last_name'],
            'gender'=> $request['gender'],
            'Reg_num'=> $request['Reg_num'],
            'phoneNum'=> $request['phoneNum'],
            'department'=>$request['department'],
             'DOB'=> $request['DOB'],
            'avater_name'=> $imageName,
           
    ]);
    return redirect('/');

    }
}
