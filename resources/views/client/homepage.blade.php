<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Xem bài viết</title>
	<link href="{{ asset('assets/client/css/style-student.css') }}" rel="stylesheet">
	<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>

<body id="top">

	<!-- Banner -->
	<!--
				To use a video as your background, set data-video to the name of your video without
				its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
				formats to work correctly.
			-->
	<section id="banner" data-video="{{ asset('assets/client/images/banner') }}">
		<div class="inner">
			<header>
				<h1>Xem bài viết</h1>
				<p>Xem bài viết của giáo viên tại đây nha.</p>

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

			</header>
			<a href="#main" class="more">Xem thêm</a>
		</div>
	</section>

	<!-- Main -->
	<div id="main">
		<div class="inner">

			<!-- Boxes -->
			<div class="thumbnails">

				<div class="box">
					<a href="#" class="image fit"><img src="{{ asset('assets/client/images/pic01.jpg') }}" alt="" /></a>
					<div class="inner">
						<h3>Bài 1</h3>
						<p>Không biết viết gì</p>
						<a href="#" class="button fit" data-poptrox="youtube,800x400">Xem</a>
					</div>
				</div>

				<div class="box">
					<a href="#" class="image fit"><img src="{{ asset('assets/client/images/pic02.jpg') }}" alt="" /></a>
					<div class="inner">
						<h3>Bài 1</h3>
						<p>Không biết viết gì</p>
						<a href="#" class="button fit" data-poptrox="youtube,800x400">Xem</a>
					</div>
				</div>

				<div class="box">
					<a href="#" class="image fit"><img src="{{ asset('assets/client/images/pic03.jpg') }}" alt="" /></a>
					<div class="inner">
						<h3>Bài 1</h3>
						<p>Không biết viết gì</p>
						<a href="#" class="button fit" data-poptrox="youtube,800x400">Xem</a>
					</div>
				</div>

				<div class="box">
					<a href="#" class="image fit"><img src="{{ asset('assets/client/images/pic04.jpg') }}" alt="" /></a>
					<div class="inner">
						<h3>Bài 1</h3>
						<p>Không biết viết gì</p>
						<a href="#" class="button fit" data-poptrox="youtube,800x400">Xem</a>
					</div>
				</div>

				<div class="box">
					<a href="#" class="image fit"><img src="{{ asset('assets/client/images/pic05.jpg') }}" alt="" /></a>
					<div class="inner">
						<h3>Bài 1</h3>
						<p>Không biết viết gì</p>
						<a href="#" class="button fit" data-poptrox="youtube,800x400">Xem</a>
					</div>
				</div>

				<div class="box">
					<a href="#" class="image fit"><img src="{{ asset('assets/client/images/pic06.jpg') }}" alt="" /></a>
					<div class="inner">
						<h3>Bài 1</h3>
						<p>Không biết viết gì</p>
						<a href="#" class="button fit" data-poptrox="youtube,800x400">Xem</a>
					</div>
				</div>

			</div>

		</div>
	</div>

	<!-- Footer -->
	<footer id="footer">
		<div class="inner">
			<h2>Etiam veroeros lorem</h2>
			<p>Pellentesque eleifend malesuada efficitur. Curabitur volutpat dui mi, ac imperdiet dolor tincidunt nec. Ut erat lectus, dictum sit amet lectus a, aliquet rutrum mauris. Etiam nec lectus hendrerit, consectetur risus viverra, iaculis orci. Phasellus eu nibh ut mi luctus auctor. Donec sit amet dolor in diam feugiat venenatis. </p>

			<ul class="icons">
				<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
			</ul>
			<p class="copyright">&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com/">Unsplash</a>. Videos: <a href="http://coverr.co/">Coverr</a>.</p>
		</div>
	</footer>

	<!-- Scripts -->
	<script src="{{ asset('assets/client/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/client/js/jquery.scrolly.min.js') }}"></script>
	<script src="{{ asset('assets/client/js/jquery.poptrox.min.js') }}"></script>
	<script src="{{ asset('assets/client/js/skel.min.js') }}"></script>
	<script src="{{ asset('assets/client/js/util.js') }}"></script>
	<script src="{{ asset('assets/client/js/main.js') }}"></script>

</body>

</html>