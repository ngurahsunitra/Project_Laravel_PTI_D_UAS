
<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="utf-8" />
		<title>
			Zoom.ly
		</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<link href="{{ asset('assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/demo/default/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />

	</head>
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--singin m-login--2 m-login-2--skin-3" id="m_login" style="background-image: url(../../../assets/app/media/img//bg/bg-2.jpg);">
				<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
					<div class="m-login__container">							
						<div class="m-login__signin">
							@if (session()->has('success'))
							<div class="alert alert-success d-flex align-items-center" role="alert">
								<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
									<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
									  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
									</symbol>
								</svg>
								<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
								<div>
									&nbsp;&nbsp;&nbsp;&nbsp;{{ session('success') }}
								</div>
							</div>
							@endif

							@if (session()->has('loginError'))
							<div class="alert alert-danger d-flex align-items-center" role="alert">
								<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
									<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
										<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
									</symbol>
								</svg>
								<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
								<div>
									&nbsp;&nbsp;&nbsp;&nbsp;{{ session('loginError') }}
								</div>
							</div>
							@endif
							
							<br>
							<br>
							<div class="m-login__head">
								<h3 class="m-login__title">
									Log In
								</h3>
							</div>
							<form class="m-login__form m-form" action="{{ route('login') }}" method="post">
								@csrf
								<div class="form-group m-form__group">
									<input class="form-control m-input @error('email') is-invalid @enderror" type="email" placeholder="Email" name="email" required value="{{ old('email') }}" autofocus>
									@error('email')
										<div class="invalid-feedback">
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $message }}
										</div>
									@enderror
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" required>
									@error('password')
										<div class="invalid-feedback">
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $message }}
										</div>
									@enderror
								</div>
								<div class="row m-login__form-sub">
									<div class="col m--align-right m-login__form-right">
											Forget Password ?
									</div>
								</div>
								<div class="m-login__form-action">
									<button type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">
										Log In
									</button>
								</div>
							</form>
						</div>
						<div class="m-login__account">
							<span class="m-login__account-msg">
								Don't have an account yet ?
							</span>
							&nbsp;&nbsp;
							<a href="{{ route('register')}}">
								Sign Up
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="{{ asset('assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
	    <script src="{{ asset('assets/demo/default/base/scripts.bundle.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/snippets/pages/user/login.js') }}" type="text/javascript"></script>
	</body>
</html>
