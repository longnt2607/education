<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset=UTF-8>
    <title>Viết bài</title>
    <link href="{{ asset('assets/client/css/style-teacher.css') }}" rel="stylesheet">
</head>

<body>
    @guest
    <li class="nav-item">
        <a class="nav-link" href="{{ route('checkout') }}">{{ __('Login') }}</a>
    </li>
    @if (Route::has('register'))
    <li class="nav-item">
        <a class="nav-link" href="{{ route('checkout') }}">{{ __('Register') }}</a>
    </li>
    @endif
    @else
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
    @endguest
    <div class="container">
        <form action="">
            <div class="input-field">
                <label for="title">Tiêu đề</label>
                <input type="text" name="Article_title" id="title">
            </div>
            <textarea name="Article_content" id="editor"></textarea>
            <input type="submit" class="publish-btn" name="submit_data" value="Đăng bài">
        </form>
    </div>

    <script src={{ url('ckeditor/ckeditor.js') }}></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
</body>

</html>