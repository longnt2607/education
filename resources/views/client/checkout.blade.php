@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="email" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->


<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form id="loginForm" action="{{ url('login') }}" method="POST" accept-charset="utf-8" class="sign-in-form" enctype="multipart/form-data">
                @csrf
                <h2 class="title">????ng nh???p</h2>

                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="email" autofocus placeholder="T??n ????ng nh???p">

                </div>
                @error('username')
                <div>
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                </div>
                @enderror
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="M???t kh???u">

                </div>
                <!-- @error('password')
                <div>
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                </div>
                @enderror -->
                <div class="forgot-field">
                    <i class="fas fa-unlock"></i>
                    <a href="#">Qu??n m???t kh???u</a>
                </div>
                <input type="submit" class="btn solid btn-sign-in" name="btnLogin" value="????ng nh???p">

            </form>

            <form id="registerStudentForm" action="{{ route('registerstudent') }}" method="post" class="sign-up-form" accept-charset="utf-8" enctype="multipart/form-data">

                <div class="form-student">
                    <h2 class="title">????ng k??</h2>
                    <div class="group-radio">
                        <label class="container-check">H???c vi??n
                            <input type="radio" checked="checked" name="radio" class="rb-check" value="student" onclick="check(this)">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-check">Gi???ng vi??n
                            <input type="radio" name="radio" class="rb-check" value="teacher" onclick="check(this)">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    @csrf
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="register_student_name" type="text" class="form-control @error('register_student_name') is-invalid @enderror" name="register_student_name" value="{{ old('register_student_name') }}" required autocomplete="register_student_name" autofocus placeholder="H??? t??n">
                        @error('register_student_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="register_student_username" type="text" class="form-control @error('register_student_username') is-invalid @enderror" name="register_student_username" value="{{ old('register_student_username') }}" required autocomplete="register_student_username" autofocus placeholder="T??n ????ng nh???p" />
                        @error('register_student_username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input id="register_student_email" placeholder="Email" type="email" class="form-control @error('register_student_email') is-invalid @enderror" name="register_student_email" value="{{ old('register_student_email') }}" required autocomplete="register_student_email">
                    </div>
                    @error('email')
                    <div>
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                    @enderror
                    <div class="input-field">
                        <i class="fas fa-phone"></i>
                        <input id="register_student_phone" placeholder="S??? ??i???n tho???i" type="text" class="form-control @error('register_student_phone') is-invalid @enderror" name="register_student_phone" value="{{ old('register_student_phone') }}" required autocomplete="register_student_phone" autofocus>

                        @error('register_student_phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-users"></i>
                        <input id="register_student_class" placeholder="L???p" type="text" class="form-control @error('register_student_class') is-invalid @enderror" name="register_student_class" value="{{ old('register_student_class') }}" required autocomplete="register_student_class" autofocus>

                        @error('register_student_class')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="register_student_password" placeholder="M???t kh???u" type="password" class="form-control @error('register_student_password') is-invalid @enderror" name="register_student_password" required autocomplete="register_student_password">
                    </div>
                    @error('password')
                    <div>
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                    @enderror
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="register_student_password_confirmation" placeholder="Nh???p l???i m???t kh???u" type="password" class="form-control" name="register_student_password_confirmation" required autocomplete="register_student_password_confirmation">
                    </div>
                    <input type="hidden" id="register_student_role" name="role" value="2">
                    <input name="btnStudentRegister" type="submit" class="btn btn-student-register" value="????ng k??" />
                </div>
            </form>

            <form id="registerTeacherForm" action="{{ route('registerteacher') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                <div class="form-teacher">
                    <h2 class="title">????ng k??</h2>
                    <div class="group-radio">
                        <label class="container-check">H???c vi??n
                            <input type="radio" name="radio" class="rb-check" value="student" onclick="check(this)">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-check">Gi???ng vi??n
                            <input type="radio" checked="checked" name="radio" class="rb-check" value="teacher" onclick="check(this)">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    @csrf
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="register_teacher_name" type="text" class="form-control @error('register_teacher_name') is-invalid @enderror" name="register_teacher_name" value="{{ old('register_teacher_name') }}" required autocomplete="register_teacher_name" autofocus placeholder="H??? t??n">
                        @error('register_teacher_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="register_teacher_username" type="text" class="form-control @error('register_teacher_username') is-invalid @enderror" name="register_teacher_username" value="{{ old('register_teacher_username') }}" required autocomplete="register_teacher_username" autofocus placeholder="T??n ????ng nh???p" />
                        @error('register_teacher_username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input id="register_teacher_email" placeholder="Email" type="email" class="form-control @error('register_teacher_email') is-invalid @enderror" name="register_teacher_email" value="{{ old('register_teacher_email') }}" required autocomplete="register_teacher_email">
                    </div>
                    @error('email')
                    <div>
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                    @enderror
                    <div class="input-field">
                        <i class="fas fa-phone"></i>
                        <input id="register_teacher_phone" placeholder="S??? ??i???n tho???i" type="text" class="form-control @error('register_teacher_phone') is-invalid @enderror" name="register_teacher_phone" value="{{ old('register_teacher_phone') }}" required autocomplete="register_teacher_phone" autofocus>

                        @error('register_teacher_phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-building"></i>
                        <input id="register_teacher_class" placeholder="????n v??? c??ng t??c" placeholder="L???p" type="text" class="form-control @error('register_teacher_class') is-invalid @enderror" name="register_teacher_class" value="{{ old('register_teacher_class') }}" required autocomplete="register_teacher_class" autofocus>
                        @error('register_teacher_class')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="register_teacher_password" placeholder="M???t kh???u" type="password" class="form-control @error('register_teacher_password') is-invalid @enderror" name="register_teacher_password" required autocomplete="register_teacher_password">
                    </div>
                    @error('password')
                    <div>
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                    @enderror
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="register_teacher_password_confirmation" placeholder="Nh???p l???i m???t kh???u" type="password" class="form-control" name="register_teacher_password_confirmation" required autocomplete="register_teacher_password_confirmation">
                    </div>
                    <input type="hidden" id="register_teacher_role" name="role" value="1">
                    <input name="btnTeacherRegister" type="submit" class="btn btn-teacher-register" value="????ng k??" />
                </div>
            </form>
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <p>Ch??a c?? t??i kho???n?</p>
                <button class="btn transparent" id="sign-up-btn">
                    ????ng k??
                </button>
            </div>
            <img src="{{ asset('assets/client/images/log.svg') }}" class="image" alt="" />
        </div>
        <div class="panel right-panel">
            <div class="content">
                <p>???? c?? t??i kho???n</p>
                <button class="btn transparent" id="sign-in-btn">
                    ????ng nh???p
                </button>
            </div>
            <img src="{{ asset('assets/client/images/register.svg') }}" class="image" alt="" />
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('assets/client/js/app.js') }}"></script>
@endsection