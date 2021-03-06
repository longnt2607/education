@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="personClass" class="col-md-4 col-form-label text-md-right">class</label>

                            <div class="col-md-6">
                                <input id="personClass" type="text" class="form-control @error('personClass') is-invalid @enderror" name="personClass" value="{{ old('personClass') }}" required autocomplete="personClass" autofocus>

                                @error('personClass')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">role</label>

                            <div class="col-md-6">
                                <input id="role" type="text" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role" autofocus>

                                @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="M???t kh???u">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- <div class="checkbox-field">
                    <label class="container-checkbox">Nh??? ????ng nh???p
                        <input type="checkbox">
                        <span class="checkmark-remember"></span>
                    </label>
                    
                    </div> -->

                <div class="forgot-field">
                    <i class="fas fa-unlock"></i>
                    <a href="#">Qu??n m???t kh???u</a>
                </div>
                <input type="submit" class="btn solid btn-sign-in" name="btnLogin" value="????ng nh???p">
                <!-- <input name="btnLogin" type="submit" value="????ng nh???p" class="btn solid btn-sign-in" /> -->
                <!--                     <a class="btn btn-link" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                     -->

            </form>

            <!-- <form id="registerForm" action="{{ route('register') }}" method="post" class="sign-up-form" accept-charset="utf-8" enctype="multipart/form-data"> -->



            <!-- <form id="registerStudentForm" action="{{ route('register') }}" method="post" class="sign-up-form" accept-charset="utf-8" enctype="multipart/form-data">
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
                <div class="form-student">
                    @csrf
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="Studentname" type="text" class="form-control @error('name') is-invalid @enderror" name="Studentname" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="H??? t??n">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="Studentusername" type="text" class="form-control @error('username') is-invalid @enderror" name="Studentusername" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="T??n ????ng nh???p" />
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
                        <input id="Studentphone" placeholder="S??? ??i???n tho???i" type="text" class="form-control @error('phone') is-invalid @enderror" name="Studentphone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-users"></i>
                        <input id="StudentpersonClass" placeholder="L???p" type="text" class="form-control @error('personClass') is-invalid @enderror" name="StudentpersonClass" value="{{ old('personClass') }}" required autocomplete="personClass" autofocus>

                        @error('personClass')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="Studentpassword" placeholder="M???t kh???u" type="password" class="form-control @error('password') is-invalid @enderror" name="Studentpassword" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="Studentpassword-confirm" placeholder="Nh???p l???i m???t kh???u" type="password" class="form-control" name="Studentpassword_confirmation" required autocomplete="new-password">
                    </div>
                    <input name="btnStudentRegister" type="submit" class="btn btn-student-register" value="????ng k??" />
                </div>
            </form>

            <form id="registerForm" action="{{ route('register') }}" method="post" class="sign-up-form" accept-charset="utf-8" enctype="multipart/form-data">
                <div class="form-teacher">
                    @csrf
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="H??? t??n">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="T??n ????ng nh???p" />
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
                        <input id="phone" placeholder="S??? ??i???n tho???i" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-building"></i>
                        <input id="personClass" placeholder="????n v??? c??ng t??c" placeholder="L???p" type="text" class="form-control @error('personClass') is-invalid @enderror" name="personClass" value="{{ old('personClass') }}" required autocomplete="personClass" autofocus>
                        @error('personClass')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password" placeholder="M???t kh???u" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password-confirm" placeholder="Nh???p l???i m???t kh???u" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <input name="btnTeacherRegister" type="submit" class="btn btn-teacher-register" value="????ng k??" />
                </div>
            </form> -->

            <form action="#" class="sign-up-form">



                <div class="form-student">

                    <div class="form-title">
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
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="H??? t??n" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="T??n ????ng nh???p" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-phone"></i>
                        <input type="text" placeholder="S??? ??i???n tho???i" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-users"></i>
                        <input type="text" placeholder="L???p" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="M???t kh???u" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Nh???p l???i m???t kh???u" />
                    </div>
                    <input type="submit" class="btn btn-student-register" value="????ng k??" />
                </div>


            </form>

            <form action="">
                <div class="form-teacher">
                    <div class="form-title">
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
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="H??? t??n" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="T??n ????ng nh???p" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-phone"></i>
                        <input type="text" placeholder="S??? ??i???n tho???i" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-building"></i>
                        <input type="text" placeholder="????n v??? c??ng t??c" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="M???t kh???u" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Nh???p l???i m???t kh???u" />
                    </div>
                    <input type="submit" class="btn btn-teacher-register" value="????ng k??" />
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
            <img src="http://localhost:8000/assets/client/images/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
            <div class="content">
                <p>???? c?? t??i kho???n</p>
                <button class="btn transparent" id="sign-in-btn">
                    ????ng nh???p
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
            }
            // console.log(res);
        });
    });

    $("input[name='btnStudentRegister']").on('click', function() {
        var name = $("input[name='name']").val();
        var username = $("input[name='username']").val();
        var email = $("input[name='email']").val();
        var phone = $("input[name='phone']").val();
        var student_class = $("input[name='student_class']").val();
        var password = $("input[name='password']").val();

        var data = {
            "_token": "{{ csrf_token() }}",
            name: name,
            username: username,
            email: email,
            phone: phone,
            personClass: student_class,
            password: password,
            role: '2'
        }

        // alert(data.username + data.password);

        $.post("{{ url('/register') }}", data, function(res) {
            // if (res.result = true) {
            //     window.location.href = "{{ route('login') }}";
            // }
            console.log(res);
        });
    });

    // $("input[name='btnTeacherRegister']").on('click', function() {
    //     var userName = $("input[name='username']").val();
    //     var password = $("input[name='password']").val();

    //     var data = {
    //         "_token": "{{ csrf_token() }}",
    //         username: userName,
    //         password: password
    //     }

    //     // alert(data.username + data.password);

    //     $.post('{{ route("register") }}', data, function(res) {
    //         if (res.auth = true) {
    //             window.location.href = "{{ route('homepage') }}";
    //         }
    //         // console.log(res);
    //     });
    // });
</script> -->
@endsection