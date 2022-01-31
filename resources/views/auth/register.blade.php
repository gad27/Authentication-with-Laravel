@extends('template')

<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(image/logo.jpg);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Register New Account</h3>
			      		</div>
			      	</div>
                      <form method="POST" action="{{ route('register') }}">
                            @csrf
                        <div class="form-group mb-3">
                              <label for="name" class="sr-only">Name</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
			      		<div class="form-group mb-3">
                          <label for="email" class="sr-only">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email address">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
			      		</div>
		            <div class="form-group mb-3">
                    <label for="password" class="sr-only">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
		            </div>
                    <div class="form-group mb-3">
                    <label for="password" class="sr-only">Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
		            </div>
		            <div class="form-group">
		            	<input type="submit" name="register" id="register" class="form-control btn btn-primary rounded submit px-3" value="Register">
		            </div>
		            <div class="form-group d-md-flex">
		            </div>
		          </form>
                  <a href="{{ url('forgot-password') }}" class="forgot-password-link">Forgot password?</a>
                        <p class="login-card-footer-text">Alredy have an account? <a class="color-yellow" href="{{ route('login') }}" class="text-reset">Login here</a></p>
                        <nav class="login-card-footer-nav">
                            <a href="#!">Terms of use.</a>
                            <a href="#!">Privacy policy</a>
                        </nav>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>



