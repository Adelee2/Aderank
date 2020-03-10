<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Stevebauman\Location\LocationServiceProvider;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Auth\Middleware\EnsureEmailIsVerified;
// use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function loginpage()
    {

        return view('loginpage');
        // return redirect()->with('userprofile')
    }
    public function logoutpage(Request $request)
    {
        $request->session()->forget('key');
        return view('home');
        // return redirect()->with('userprofile')
    }
    public function registerpage()
    {
        $success= "";
        $errors= "";
        return view('registerpage',compact('success','errors'));
        // return redirect()->with('userprofile')
    }
    public function checklogin(Request $req)
    {   
        $email = $req->email;
        $pass = $req->password;

        $response = DB::table('personal_data')->where('email',$email)->where('email_verified_at',true)->get()->first();
        if($response){
            // $response = json_decode($response);
            // dd($response->password);
            if(Hash::check($pass,$response->password)){
                // $userprofile = Json
                $req->session()->put('key',$response);
                return redirect('');
            }
            else{
                return back()->with('error','Password is incorrect');
            }
        }
        else{
            return back()->with('error','user does not exist or you are yet to verify your account');
        }

        
        // return redirect()->with('userprofile')
    }

    public function verifydatabase($email,$hash)
    {
        if($email !== "" && $hash !== ""){
            $response = DB::table('personal_data')->where('token',$hash)->get();
            // dd($response);
            if(count($response)>0){
                DB::table('personal_data')->where('email', $email)->update(['email_verified_at' => true]);
               return redirect('login')->with('userprofile',$hash);
            }
            else{
                return redirect('404page/error updating database');
            }
        }
        else{
            return redirect('404page/invalid url');
        }
    }
}
