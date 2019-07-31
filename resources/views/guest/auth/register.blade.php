<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>{{config('app.name')}}</title>
	<!-- FAVICON -->
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<!-- GOOGLE FONTS -->
	<link href="{{asset('guest/fonts.googleapis.com/css.css')}}" rel="stylesheet">
	<!-- FONT AWESOME -->
	<link rel="stylesheet" href="{{asset('guest/css/font-awesome.min.css')}}">
	<!-- ARCHIVES CSS -->
	<link rel="stylesheet" href="{{asset('guest/css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('guest/css/bootstrap.css')}}">
	<link rel="stylesheet" href=" {{asset('guest/css/styles.css')}}">
	<link rel="stylesheet" id="color" href="{{asset('guest/css/default.css')}}">
</head>

<body class="inner-pages">
	<!-- START SECTION HEADINGS -->
    @include('guest.common.header')

	<section class="headings">
		<div class="text-heading text-center">
			<div class="container">
				<h1>Register</h1>
				<h2><a href="index.html">Home </a> &nbsp;/&nbsp; Register</h2>
			</div>
		</div>
	</section>
	<!-- END SECTION HEADINGS -->

	<!-- START SECTION 404 -->
	<div id="login">
		<div class="login">
			<form autocomplete="off">
				<div class="form-group">
					<label>Your Name</label>
					<input class="form-control" type="text">
					<i class="ti-user"></i>
				</div>
				<div class="form-group">
					<label>Your Last Name</label>
					<input class="form-control" type="text">
					<i class="ti-user"></i>
				</div>
				<div class="form-group">
					<label>Your Email</label>
					<input class="form-control" type="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Your password</label>
					<input class="form-control" type="password" id="password1">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="form-group">
					<label>Confirm password</label>
					<input class="form-control" type="password" id="password2">
					<i class="icon_lock_alt"></i>
				</div>
				<div id="pass-info" class="clearfix"></div>
				<a href="register.html#0" class="btn_1 rounded full-width add_top_30">Register Now!</a>
				<div class="text-center add_top_10">Already have an acccount? <strong><a href="login.html">Sign In</a></strong></div>
			</form>
		</div>
	</div>
	<!-- END SECTION 404 -->

	<!-- START SECTION NEWSLETTER -->
@include('guest.section.newsletter')
	<!-- END SECTION NEWSLETTER -->

	<!-- START FOOTER -->
@include('guest.common.footer')
	<!-- END FOOTER -->
	<!--Style Switcher===========================================-->
	<div class="color-switcher" id="choose_color"> <a href="register.html#." class="picker_close"><i class="fa fa-cog fa-spin fa-2x" ></i></a>
		<div class="theme-colours">
			<p class="font-italic">Choose Colour style</p>
			<ul>
				<li>
					<a href="register.html#." class="blue" id="blue"></a>
				</li>
				<li>
					<a href="register.html#." class="pink" id="pink"></a>
				</li>
				<li>
					<a href="register.html#." class="orange" id="orange"></a>
				</li>
				<li>
					<a href="register.html#." class="purple" id="purple"></a>
				</li>
				<li>
					<a href="register.html#." class="green" id="green"></a>
				</li>
				<li>
					<a href="register.html#." class="red" id="red"></a>
				</li>
				<li>
					<a href="register.html#." class="cyan" id="cyan"></a>
				</li>
				<li>
					<a href="register.html#." class="sky-blue" id="sky-blue"></a>
				</li>
				<li>
					<a href="register.html#." class="gray" id="gray"></a>
				</li>
				<li>
					<a href="register.html#." class="brown" id="brown"></a>
				</li>
			</ul>
		</div>
	</div>

	<!-- ARCHIVES JS -->
	<script src="{{asset('guest/js/jquery.min.js')}}"></script>
	<script src="{{asset('guest/js/tether.min.js')}}"></script>
	<script src="{{asset('guest/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('guest/js/smooth-scroll.min.js')}}"></script>
	<script src="{{asset('guest/js/ajaxchimp.min.js')}}"></script>
	<script src="{{asset('guest/js/newsletter.js')}}"></script>
	<script src="{{asset('guest/js/color-switcher.js')}}"></script>
	<script src="{{asset('guest/js/inner.js')}}"></script>
</body>

</html>
