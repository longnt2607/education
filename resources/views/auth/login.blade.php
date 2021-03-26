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
                <h2 class="title">Đăng nhập</h2>

                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="email" autofocus placeholder="Tên đăng nhập">
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Mật khẩu">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- <div class="checkbox-field">
                    <label class="container-checkbox">Nhớ đăng nhập
                        <input type="checkbox">
                        <span class="checkmark-remember"></span>
                    </label>
                    
                    </div> -->

                <div class="forgot-field">
                    <i class="fas fa-unlock"></i>
                    <a href="#">Quên mật khẩu</a>
                </div>
                <input type="submit" class="btn solid btn-sign-in" name="btnLogin" value="Đăng nhập">
                <!-- <input name="btnLogin" type="submit" value="Đăng nhập" class="btn solid btn-sign-in" /> -->
                <!--                     <a class="btn btn-link" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                     -->

            </form>
            
            <form id="registerStudentForm" action="{{ route('register') }}" method="post" class="sign-up-form" accept-charset="utf-8" enctype="multipart/form-data">
                <h2 class="title">Đăng ký</h2>
                <div class="group-radio">
                    <label class="container-check">Học viên
                        <input type="radio" checked="checked" name="radio" class="rb-check" value="student" onclick="check(this)">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container-check">Giảng viên
                        <input type="radio" name="radio" class="rb-check" value="teacher" onclick="check(this)">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="form-student">
                    @csrf
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="Studentname" type="text" class="form-control @error('name') is-invalid @enderror" name="Studentname" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Họ tên">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="Studentusername" type="text" class="form-control @error('username') is-invalid @enderror" name="Studentusername" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Tên đăng nhập" />
                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input id="Studentemail" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="Studentemail" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-phone"></i>
                        <input id="Studentphone" placeholder="Số điện thoại" type="text" class="form-control @error('phone') is-invalid @enderror" name="Studentphone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-users"></i>
                        <input id="StudentpersonClass" placeholder="Lớp" type="text" class="form-control @error('personClass') is-invalid @enderror" name="StudentpersonClass" value="{{ old('personClass') }}" required autocomplete="personClass" autofocus>

                        @error('personClass')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="Studentpassword" placeholder="Mật khẩu" type="password" class="form-control @error('password') is-invalid @enderror" name="Studentpassword" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="Studentpassword-confirm" placeholder="Nhập lại mật khẩu" type="password" class="form-control" name="Studentpassword_confirmation" required autocomplete="new-password">
                    </div>
                    <input name="btnStudentRegister" type="submit" class="btn btn-student-register" value="Đăng ký" />
                    <!-- <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button> -->
                </div>
            </form>

            <form id="registerForm" action="{{ route('register') }}" method="post" class="sign-up-form" accept-charset="utf-8" enctype="multipart/form-data">
                <div class="form-teacher">
                    @csrf
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Họ tên">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Tên đăng nhập" />
                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-phone"></i>
                        <input id="phone" placeholder="Số điện thoại" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-building"></i>
                        <input id="personClass" placeholder="Đơn vị công tác" placeholder="Lớp" type="text" class="form-control @error('personClass') is-invalid @enderror" name="personClass" value="{{ old('personClass') }}" required autocomplete="personClass" autofocus>
                        @error('personClass')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password" placeholder="Mật khẩu" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password-confirm" placeholder="Nhập lại mật khẩu" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <input name="btnTeacherRegister" type="submit" class="btn btn-teacher-register" value="Đăng ký" />
                </div>
            </form>
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <p>Chưa có tài khoản?</p>
                <button class="btn transparent" id="sign-up-btn">
                    Đăng ký
                </button>
            </div>
            <img src="http://localhost:8000/assets/client/images/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
            <div class="content">
                <p>Đã có tài khoản</p>
                <button class="btn transparent" id="sign-in-btn">
                    Đăng nhập
                </button>
            </div>
            <img src="http://localhost:8000/assets/client/images/register.svg" class="image" alt="" />
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('assets/client/js/app.js') }}"></script>
<!-- <script>
    $("input[name='btnLogin']").on('click', function() {
        var userName = $("input[name='username']").val();
        var password = $("input[name='password']").val();

        var data = {
            "_token": "{{ csrf_token() }}",
            username: userName,
            password: password
        }

        // alert(data.username + data.password);

        $.post('{{ route("login") }}', data, function(res) {
            if (res.auth = true) {
                window.location.href = "{{ route('homepage') }}";
            } else {
                alert('ten dang nhap hoac mat khau khong dung');
            }
            // console.log(res);
        });

        // $.ajax({
        //     type: "post",
        //     method: 'post',
        //     url: '{{ route("login") }}',
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     },
        //     data: data,
        //     dataType: 'json',
        //     contentType: 'application/json',
        //     success: function(res) {
        //             if (res.auth = true) {
        //                 window.location.href = "{{ route('homepage') }}";
        //             } else {
        //                 alert('ten dang nhap hoac mat khau khong dung');
        //             }
        //     },
        //     error: function(error) {
        //         console.log(error);
        //     }
        // })
    });
</script> -->
@endsection