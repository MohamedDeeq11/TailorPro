<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
	<!-- All Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignLab" >
	<meta name="robots" content="" >
	<meta name="keywords" content="school, school admin, education, academy, admin dashboard, college, college management, education management, institute, school management, school management system, student management, teacher management, university, university management" >
	<meta name="description" content="Discover Akademi - the ultimate admin dashboard and Bootstrap 5 template. Specially designed for professionals, and for business. Akademi provides advanced features and an easy-to-use interface for creating a top-quality website with School and Education Dashboard" >
	<meta property="og:title" content="Akademi : School and Education Management Admin Dashboard Template" >
	<meta property="og:description" content="Akademi - the ultimate admin dashboard and Bootstrap 5 template. Specially designed for professionals, and for business. Akademi provides advanced features and an easy-to-use interface for creating a top-quality website with School and Education Dashboard">
	<meta property="og:image" content="https://akademi.dexignlab.com/xhtml/social-image.png" >
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Page Title Here -->
	<title>Akademi : School and Education Management Admin Dashboard Template</title>

<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png" >
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="body  h-100">
	<div class="authincation d-flex flex-column flex-lg-row flex-column-fluid">
		<div class="login-aside text-center  d-flex flex-column flex-row-auto">
			<div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
				<div class="text-center mb-lg-4 mb-2 pt-5 logo">
                    <img src="{{url('images/logo/AL-01.png')}}" alt="" style="width:300px;heigh:200px">
				</div>
				<h3 class="mb-2 text-white">Register Here!</h3>
				
			</div>
			<div class="aside-image position-relative" style="background-image:url(images/background/pic-2.png);">
				<img class="img1 move-1" src="{{url('images/background/pic3.png')}}" alt="">
				<img class="img2 move-2" src="{{url('images/background/pic4.png')}}" alt="">
				<img class="img3 move-3" src="{{url('images/background/pic5.png')}}" alt="">
				
			</div>
		</div>
		<div class="container flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
			<div class="d-flex justify-content-center h-100 align-items-center">
				<div class="authincation-content style-2">
					<div class="row no-gutters">
						<div class="col-xl-12 tab-content">
							<div id="sign-up" class="auth-form tab-pane fade show active  form-validation">
								
								<form action="{{url('/postregister')}}" method="post">
								@csrf
									<div >
										<label for="fname" >{{ __('First Name') }}</label>
							
										<div >
											<input id="fname" type="text" class="form-control" name="fname" value="{{ old('fname') }}" required autocomplete="fname" placeholder="First Name" autofocus>
							
											@error('fname')
												<span  role="alert-danger">
													<strong style="color: red">{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>
									<div >
										<label for="lname" >{{ __('Last Name') }}</label>
							
										<div >
											<input id="lname" type="text" class="form-control" name="lname" value="{{ old('lname') }}" required autocomplete="lname" placeholder="Last Name" autofocus required>
							
											@error('lname')
												<span  role="alert-danger">
													<strong style="color: red">{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>
									<div >
										<label for="mobile" >{{ __('Mobile Number') }}</label>
							
										<div >
											<input id="mobile" type="tel" class="form-control" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" placeholder="Mobile Number" autofocus required>
							
											@error('mobile')
												<span  role="alert-danger">
													<strong style="color: red">{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>
					
									<div >
										<label for="email" >{{ __('Email Address') }}</label>
							
										<div >
											<input id="email" type="email" class="form-control"  name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" required>
							
											@error('email')
												<span  role="alert-danger">
													<strong style="color: red">{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>
							
									<div >
										<label for="password" >{{ __('Password') }}</label>
							
										<div >
											<input id="password" type="password" class="form-control" name="password" required autocomplete="new-password"  placeholder="Password" required>
							
											@error('password')
												<span  role="alert-danger">
													<strong style="color: red">{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>
							
									<div >
										<label for="password-confirm" >{{ __('Confirm Password') }}</label>
							
										<div >
											<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"  placeholder="Confirm Password" required>
										</div>
									</div>
							
								
								
									<button type="submit" class="btn btn-block btn-primary" style="margin-top: 20px">Sign me up</button>
									
								</form>
								<div class="new-account mt-3 text-center">
									<p class="font-w500">Already have an account? <a class="text-primary" href="{{url('/login')}}">Sign in</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{url('vendor/global/global.min.js')}}"></script>
    <script src="{{url('js/custom.min.js')}}"></script>
    <script src="{{url('js/dlabnav-init.js')}}"></script>
	
</body>
</html>