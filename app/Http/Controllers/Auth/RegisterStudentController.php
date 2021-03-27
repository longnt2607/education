<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterStudentController extends Controller
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
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string'],
            'username' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required'],
            'class' => ['required', 'string'],
            // 'password' => ['required', 'min:8', 'confirmed'],
            'password' => ['required', 'min:8', 'required_with:password_confirmation', 'same:password_confirmation'],
            'password_confirmation' => ['required', 'min:8'],
            // 'role' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['register_student_name'],
    //         'username' => $data['register_student_username'],
    //         'email' => $data['register_student_email'],
    //         'phone' => $data['register_student_phone'],
    //         'class' => $data['register_student_class'],
    //         'password' => Hash::make($data['register_student_password']),
    //         // 'role' => $data['Studentrole'],
    //         'role' => '2',
    //     ]);
    // }

    public function register_student(Request $request)
    {
        $input = $request->all();

        $data = [
            'name' => $input['register_student_name'],
            'username' => $input['register_student_username'],
            'email' => $input['register_student_email'],
            'phone' => $input['register_student_phone'],
            'class' => $input['register_student_class'],
            'password' => $input['register_student_password'],
            'password_confirmation' => $input['register_student_password_confirmation'],
        ];
        $validator = $this->validator($data);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        User::create([
            'name' => $input['register_student_name'],
            'username' => $input['register_student_username'],
            'email' => $input['register_student_email'],
            'phone' => $input['register_student_phone'],
            'class' => $input['register_student_class'],
            'password' => Hash::make($input['register_student_password']),
            // 'role' => $data['Studentrole'],
            'role' => '2',
        ]);
        return redirect('/checkout');
    }
}
