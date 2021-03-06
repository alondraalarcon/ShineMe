<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />

	<title>Shine Me | Sign Up </title>

	<link href="/asset/css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">
						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">
									<div class="text-center">
										<img src="/asset/img/shineme.png" class="img-fluid rounded-circle" width="132" height="132" />
									</div>
                                    <div class="text-center mt-2">
                                        <p style="font: size 25px;" class="fw-bold">
                                            Create your account
                                        </p>
                                    </div>
                                    <form method="POST" action="{{ route('register') }}">
                                    @csrf
										<div class="mb-3">
											<label class="form-label">Name</label>
											<input class="form-control form-control-lg" type="text" value="{{ old('name') }}"
											 name="name" placeholder="Enter your name" required/>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
										</div>

										<div class="row">
                            				<div class="col-md-6 col-6">

											<label class="form-label">Phone Number</label>
												<div class=" input-group mb-3">
													<span class="input-group-text" id="addon1">+63</span>
													<input class="form-control form-control-lg @error('phone') is-invalid @enderror"  value="{{ old('phone') }}" autofocus
													type="text" name="phone" placeholder="Enter phone number" aria-describedby="addon1" required
													onchange="myChangeFunction(this)"/>
													@error('phone')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
												</div>
											</div>

											<div class="col-md-6 col-6">			
												<div class="mb-3">
													<label class="form-label">Email</label>
													<input class="form-control form-control-lg @error('email') is-invalid @enderror"  value="{{ old('email') }}" autofocus
													type="email" name="email" placeholder="Enter your email" required />
													@error('email')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
												</div>
											</div>
										</div>

										<div class="row">
                            				<div class="col-md-6 col-12">
												<div class="mb-3">
													<label for="title">Region:</label>
													<select name="region" class="form-control" required  value="{{ old('region') }}" >
														<option value="">--- Select Region ---</option>
													
													</select>
												</div>
											</div>
									
                            				<div class="col-md-6 col-12">
												<div class="mb-3">
													<label for="title">Province:</label>
													<select name="province" class="form-control" required value="{{ old('province') }}">
													</select>
												</div>
											</div>
										</div>

										<div class="row">
                            				<div class="col-md-6 col-12">
												<div class="mb-3">
													<label for="title">Municipal:</label>
													<select name="municipal" class="form-control" required value="{{ old('municipal') }}">
													</select>
												</div>
											</div>
										
                            				<div class="col-md-6 col-12">
												<div class="mb-3">
													<label for="title">Barangay:</label>
														<select name="brgy" class="form-control" required value="{{ old('brgy') }}">
													</select>
												</div>
											</div>
										</div>

										<div class="mb-3">
											<label class="form-label">Street Address</label>
											<input class="form-control form-control-lg" value="{{ old('street') }}"
											type="text" name="street" placeholder="Enter your village and street" required/>
                                            @error('street')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
										</div>

										<div class="row">
                            				<div class="col-md-6 col-6">
												<div class="mb-3">
													<label class="form-label">Password</label>
													<input class="form-control form-control-lg" 
													type="password" name="password" placeholder="Enter password" required/>
													@error('password')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
												</div>
											</div>

											<div class="col-md-6 col-6">
												<div class="mb-3">
													<label class="form-label">Confirm Password</label>
													<input id="password-confirm" type="password" class="form-control"  placeholder="Enter confirm password"
													name="password_confirmation" required autocomplete="new-password">
												</div>
											</div>
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

	<script src="/js/app.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>


    </body>
</html>
