<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Profil;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Events\UserRegistered;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;
use App\Notifications\UserRegisteredNotification;

class AuthController extends Controller
{
    public function loginview(Request $request) {
        return view('Login');
    }
    
    public function registerview(Request $request) {
        return view('Register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            "name" => 'required',
            "email" => 'required|email|unique:users',
            "password" => 'required|min:8',
        ]);

        $validated['password'] = Hash::make($request->password);

        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password' => bcrypt($request->password),
        ]);
        
        $role = Role::where('name', 'user')->first();

        

        $user->notify(new UserRegisteredNotification());

        return redirect('/Login');

    }


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'admin') {
                return redirect('/Admin');
            }

            if (Auth::user()->role == 'user') {
                return redirect('/BerandaIn');
            }

            // If the role_id does not match expected values, handle it accordingly
            Auth::logout(); // Log out the user to clear the session
            return redirect()->to('Login')->with('message','Gagal login');
        }


        // Default redirect if no matching role found
        return redirect('/Login'); // or any default route


     
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/Login');
    }
}

