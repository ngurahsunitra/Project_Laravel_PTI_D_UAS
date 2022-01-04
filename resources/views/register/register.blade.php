
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
					<div class="m-portlet__body" >
						<div class="tab-content">
							<ul class="nav nav-pills" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#m_tabs_3_1">
										Mahasiswa
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#m_tabs_3_3">
										Staf Fakultas
									</a>
								</li>
							</ul>
							<br>
							<div class="tab-pane active" id="m_tabs_3_1" role="tabpanel">
								<div class="m-login__container">
									<div class="m-login__signup">
										<div class="m-login__head">
											<h3 class="m-login__title">
												Sign Up Mahasiswa
											</h3>
											<div class="m-login__desc">
												Enter your details to create your account:
											</div>
										</div>
										<form class="m-login__form m-form" action="\register" method="POST">
			
											@csrf
			
											<input class=" form-control m-input" type="hidden" placeholder="Nama" name="is_admin" required value="0">
			
											<div class="form-group m-form__group">
												<input class="@error('name') is-invalid @enderror form-control m-input" type="text" placeholder="Full Name" name="name" required value="{{ old('name') }}">
											</div>
											@error('name')
												<div class="form-control-feedback">
													<span style="color:red">
														{{ $message }}
													</span>
												</div>
											@enderror
											<div class="form-group m-form__group">
												<input class="@error('username') is-invalid @enderror form-control m-input" type="text" placeholder="Username" name="username" required value="{{ old('username') }}">
											</div>
											@error('username')
												<div class="form-control-feedback">
													<span style="color:red">
														{{ $message }}
													</span>
												</div>
											@enderror
											<div class="form-group m-form__group">
												<input class="@error('email') is-invalid @enderror form-control m-input" type="email" placeholder="Email" name="email" required value="{{ old('email') }}">
											</div>
											@error('email')
												<div class="form-control-feedback">
													<span style="color:red">
														{{ $message }}
													</span>
												</div>
											@enderror
											<div class="form-group m-form__group">
												<input class="@error('password') is-invalid @enderror form-control m-input" type="password" placeholder="Password" name="password">
											</div>
											@error('password')
												<div class="form-control-feedback">
													<span style="color:red">
														{{ $message }}
													</span>
												</div>
											@enderror
											{{-- <div class="form-group m-form__group">
												<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Confirm Password" name="rpassword" required>
											</div> --}}
											{{-- <div class="row form-group m-form__group m-login__form-sub">
												<div class="col m--align-left">
													<label class="m-checkbox m-checkbox--light">
														<input type="checkbox" name="agree">
														I Agree the
														<a href="#" class="m-link m-link--focus">
															terms and conditions
														</a>
														.
														<span></span>
													</label>
													<span class="m-form__help"></span>
												</div>
											</div> --}}
											<div class="m-login__form-action">
												<button type="submit" {{-- id="m_login_signup_submit" --}} class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">
													Sign Up
												</button>
												&nbsp;&nbsp;
												<button type="reset" {{-- id="m_login_signup_cancel" --}} class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom m-login__btn">
													Cancel
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="m_tabs_3_3" role="tabpanel">
								<div class="m-login__container">
									<div class="m-login__signup">
										<div class="m-login__head">
											<h3 class="m-login__title">
												Sign Up Staf Fakultas
											</h3>
											<div class="m-login__desc">
												Enter your details to create your account:
											</div>
										</div>
										<form class="m-login__form m-form" action="\register" method="POST">
			
											@csrf
			
											<input class=" form-control m-input" type="hidden" placeholder="Nama" name="is_admin" required value="1">
			
											<div class="form-group m-form__group">
												<input class="@error('name') is-invalid @enderror form-control m-input" type="text" placeholder="Full Name" name="name" required value="{{ old('name') }}">
											</div>
											@error('name')
												<div class="form-control-feedback">
													<span style="color:red">
														{{ $message }}
													</span>
												</div>
											@enderror
											<div class="form-group m-form__group">
												<input class="@error('username') is-invalid @enderror form-control m-input" type="text" placeholder="Username" name="username" required value="{{ old('username') }}">
											</div>
											@error('username')
												<div class="form-control-feedback">
													<span style="color:red">
														{{ $message }}
													</span>
												</div>
											@enderror
											<div class="form-group m-form__group">
												<input class="@error('email') is-invalid @enderror form-control m-input" type="email" placeholder="Email" name="email" autocomplete="off" required value="{{ old('email') }}">
											</div>
											@error('email')
												<div class="form-control-feedback">
													<span style="color:red">
														{{ $message }}
													</span>
												</div>
											@enderror
											<div class="form-group m-form__group">
												<input class="@error('password') is-invalid @enderror form-control m-input" type="password" placeholder="Password" name="password">
											</div>
											@error('password')
												<div class="form-control-feedback">
													<span style="color:red">
														{{ $message }}
													</span>
												</div>
											@enderror
											<div class="m-login__form-action">
												<button type="submit" {{-- id="m_login_signup_submit" --}} class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">
													Sign Up
												</button>
												&nbsp;&nbsp;
												<button type="reset" {{-- id="m_login_signup_cancel" --}} class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom m-login__btn">
													Cancel
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>
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
