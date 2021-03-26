<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterTeacherController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required'],
    //         'username' => ['required'],
    //         'email' => ['required'],
    //         'phone' => ['required'],
    //         'personClass' => ['required'],
    //         'password' => ['required'],
    //         'role' => ['required'],
    //     ]);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['register_teacher_name'],
    //         'username' => $data['register_teacher_username'],
    //         'email' => $data['register_teacher_email'],
    //         'phone' => $data['register_teacher_phone'],
    //         'class' => $data['register_teacher_class'],
    //         'password' => Hash::make($data['register_teacher_password']),
    //         // 'role' => $data['Studentrole'],
    //         'role' => '1',
    //     ]);
    // }

    public function register_teacher(Request $request)
    {
        $input = $request->all();
        User::create([
            'name' => $input['register_teacher_name'],
            'username' => $input['register_teacher_username'],
            'email' => $input['register_teacher_email'],
            'phone' => $input['register_teacher_phone'],
            'class' => $input['register_teacher_class'],
            'password' => Hash::make($input['register_teacher_password']),
            // 'role' => $data['Studentrole'],
            'role' => '1',
        ]);
        return redirect('/checkout');
    }

    // public function register(Request $request)
    // {
    //     $input = $request->all();
    //     // User::create([
    //     //     'name' => $input['name'],
    //     //     'username' => $input['username'],
    //     //     'email' => $input['email'],
    //     //     'phone' => $input['phone'],
    //     //     'class' => $input['personClass'],
    //     //     'password' => Hash::make($input['password']),
    //     //     'role' => $input['role'],
    //     // ]);

    //     $user = new User();
    //     $user->name = $input['name'];
    //     $user->username = $input['username'];
    //     $user->email = $input['email'];
    //     $user->phone = $input['phone'];
    //     $user->class = $input['class'];
    //     $user->password = $input['password'];
    //     $user->role = $input['role'];
    //     $user->save();

    //     return response()->json([
    //         'result' => true,
    //         'message' => 'Create account successful',
    //         // 'input' => $input,
    //     ]);
    // }
}
