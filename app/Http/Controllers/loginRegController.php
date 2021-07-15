<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


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
    $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
             return redirect('/profile');
    // return redirect()->intended('/booksList');
        }else{
            return redirect('/singin')->withErrors($validator, 'login');
        }

    }
    public function loginPage(){

        return view('loginPage');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
       //if($validated){
        $credentials = $request->only('email', 'password');
       
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/booksList');
        }
          else{
            return redirect('/singin');//->withErrors($validator, 'login');

          }
    }

    public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
}

public function  imgEdit(Request $request){

    if ($request->hasFile('avater_name')){
        $imageName = time().'_'.$request->file('avater_name')->getClientOriginalName();
                $filePath = $request->file('avater_name')->storeAs('uploads', $imageName, 'public');
   
    
    $user = User::find($request['edit_id']);

    $user->avater_name = $imageName;

     $user->save();
    return redirect('/profile');
   // dd($user);
    }else{
        return redirect('/profile');
    }

}    
    public function updateUserForm(Request $request){
         if(Auth::check()){
        $userUpdate= User::find($request['edit_id']);
       // $userUpdate->
    
        $userUpdate->name =$request['name'];
        //dd($userUpdate);
       
        $userUpdate->email = $request['email'];   
        //$userUpdate->password= Hash::make($request['password']);
        $userUpdate->last_name= $request['last_name'];
        $userUpdate->gender = $request['gender'];
        $userUpdate->Reg_num = $request['Reg_num'];
        $userUpdate->phoneNum= $request['phoneNum'];
        $userUpdate->department= $request['department'];
        $userUpdate->DOB = $request['DOB'];
        $userUpdate->save(); 
         return redirect('/profile');
         
         }else{
             return redirect('/singin');
         }
    }



}
