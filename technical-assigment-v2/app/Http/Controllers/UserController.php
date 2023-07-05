<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function login(){
        return view('login');
    }
    public function sign(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
           ]);
    
           if(!auth()->attempt($request->only('email', 'password'))){
             return back()->with('status','Invalid login details');
           }
    
           return redirect('/products');
       }        
    

    public function register(){
        return view('register');
    }

    public function store(Request $request){
         $incomingFields = $request->validate([
            'name'=>['required', 'min:4', 'max:25', Rule::unique('users', 'name')],
            'email'=>['required','email', Rule::unique('users', 'email')],
            'password'=>['required','min:4', 'max:25']
         ]);
         
         $incomingFields['password'] = bcrypt($incomingFields['password']);
         $user = User::create($incomingFields);
         auth()->login($user);
         return redirect('/products');
    }

    public function logout(){
        auth()->logout();
        return redirect('/login');
    }

    
}
