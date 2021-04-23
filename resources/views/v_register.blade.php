
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="{{ asset('adminkit/static') }}/https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{ asset('adminkit/static') }}/img/icons/icon-48x48.png" />

	<title>Sign Up | AdminKit Demo</title>

	<link href="{{ asset('adminkit/static') }}/css/app.css" rel="stylesheet">
	<link href="{{ asset('adminkit/static') }}/https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Get started</h1>
							<p class="lead">
								Start creating the best possible user experience for you customers.
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form method="POST" action="{{ route('register') }}">
                                        @csrf
										<div class="mb-3">
											<label class="form-label">Name</label>
											<input class="form-control form-control-lg @error('name') is-invalid @enderror" type="text" name="name" placeholder="Enter your name" />
                                            @error('name')
                                                <div class="text-danger">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg @error('email') is-invalid @enderror" type="email" name="email" placeholder="Enter your email" />
                                            @error('email')
                                                <div class="text-danger">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg @error('password') is-invalid @enderror" type="password" name="password" placeholder="Enter password" />
                                            @error('password')
                                                <div class="text-danger">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
											<label class="form-label">Confirm Password</label>
											<input class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" placeholder="Enter Confirm password" />
                                            @error('password_confirmation')
                                                <div class="text-danger">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
										<div class="text-center mt-3">
											<button type="submit" class="btn btn-lg btn-primary">Sign up</button>
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="{{ asset('adminkit/static') }}/js/app.js"></script>

</body>

</html>