<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginPage(){
        return view('auth.login');
    }

     public function registerPage(){
        return view('auth.register');
    }

    public function register(Request $request){
        // validate request
        $request->validate([
        'name' => 'required|min:3',
        'password' => 'required|min:5|max:12|confirmed',
        // ' password_confirmation' =>'required|min:5|max:12',
        'email' => 'required|email|unique:users']);

    //    return $request->input();
    $user= new User;
    $user->name=$request->name;
    $user->email=$request->email;
    $user->password=Hash::make($request->password);
    $user->remember_token=$request->_token;
    $save=$user->save();
    // echo $user->password
    if(!$save){

    return back()->with('fail','Please try again');
    
    }else{

        return redirect('auth/login');
        
        }
    }

    public function check(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' =>'required'
        ]);
        // return $request->input();
       $user= User::where('email','=',$request->email)->first();
        // dd($user);
       if(!$user){
        return back()->with('fail', 'Email or Password is incorrect');
       }
       if($user){
        
        //using the Hash::check to compare password login password with the one in database
        if(Hash::check($request->password, $user->password)){
        //get user from database using the User model
        //  return ("you are logged in $user->name");
        //store user id in session
        
        $request->session()->put('loggedId',$user->id);
        $request->session()->put('loggedName',$user->name);
        return redirect(route('dashboard'));
        }
        
       }
    }

    public function dashboard(){
        // using the user id in session
        $data=[
            'userInfo' => User::where('id','=',session('loggedId' ))->first()];
       
        return view('Pages.dashboard', compact('data'));    
    }

    public function logout(){
        Session()->pull('loggedId');
        Session()->pull('loggedName');

        return redirect(route('login'));

    }
}
