<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('assets/client/css/style.css') }}" rel="stylesheet">
    <!-- <link href="/assets/client/css/style.css" rel="stylesheet"> -->
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="/homepage" class="sign-in-form">
                    <h2 class="title">Đăng nhập</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Tên đăng nhập" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Mật khẩu" />
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
                    
                    <input type="submit" value="Đăng nhập" class="btn solid btn-sign-in" />

                </form>
                <form action="#" class="sign-up-form">
                    <h2 class="title">Đăng ký</h2>
                    <div class="group-radio">
                        <label class="container-check">Học viên
                            <input type="radio" checked="checked" name="radio" class="rb-check" value="student" onclick="check(this)">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-check">Giảng viên
                            <input type="radio"  name="radio" class="rb-check" value="teacher" onclick="check(this)">
                            <span class="checkmark"></span>
                        </label>
                    </div>

                    <div class="form-student">
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Họ tên" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Tên đăng nhập" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input type="email" placeholder="Email" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-phone"></i>
                            <input type="text" placeholder="Số điện thoại" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-users"></i>
                            <input type="text" placeholder="Lớp" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Mật khẩu" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Nhập lại mật khẩu" />
                        </div>
                        <input type="submit" class="btn btn-student-register" value="Đăng ký" />
                    </div>

                    <div class="form-teacher">
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Họ tên" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Tên đăng nhập" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input type="email" placeholder="Email" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-phone"></i>
                            <input type="text" placeholder="Số điện thoại" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-building"></i>
                            <input type="text" placeholder="Đơn vị công tác" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Mật khẩu" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Nhập lại mật khẩu" />
                        </div>
                        <input type="submit" class="btn btn-teacher-register" value="Đăng ký" />
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
                <img src="{{ asset('assets/client/images/log.svg') }}" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <p>Đã có tài khoản</p>
                    <button class="btn transparent" id="sign-in-btn">
                        Đăng nhập
                    </button>
                </div>
                <img src="{{ asset('assets/client/images/register.svg') }}" class="image" alt="" />
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/client/js/app.js') }}"></script>
    <!-- <script src="/assets/client/js/app.js"></script> -->
</body>

</html>