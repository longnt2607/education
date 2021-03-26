<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Input;

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

    // use AuthenticatesUsers;
    use AuthenticatesUsers {
        logout as performLogout;
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'username';
    }

    protected function authenticated($request, $user)
    {
        switch ($user->role) {
            case '1':
                return redirect()->intended('/teacher');
                break;

            case '2':
                return redirect()->intended('/home');
                break;
            
            default:
                return redirect()->intended('/admin');
                break;
        }
        // if ($user->role == '1') {
        //     return redirect()->intended('/teacher');
        // }
        // return redirect()->intended('/home');
    }

    protected function loggedOut(Request $request)
    {
        return redirect('/checkout');
    }

    public function logout(Request $request)
    {
        $this->performLogout($request);
        return redirect()->route('checkout');
    }

    // public function login(Request $request)
    // {
    //     $input = $request->all();

    //     $this->validate($request, [
    //         'username' => 'required',
    //         'password' => 'required',
    //     ]);

    //     // $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
    //     if (Auth::attempt(array('username' => $input['username'], 'password' => $input['password']))) {
    //         return redirect()->route('homepage');
    //     } else {
    //         // $errors = new MessageBag(['error' => ['Tên đăng nhập hoặc mật khẩu không chính xác']]);
    //         // return Redirect::back()->withErrors($errors)->withInput(Input::except('error'));
    //         return redirect()->route('login')
    //             ->with('error', 'Email-Address And Password Are Wrong.');     
    //     }
    // }
}
