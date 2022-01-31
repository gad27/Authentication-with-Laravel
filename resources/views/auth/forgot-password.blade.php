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
			      			<h3 class="mb-4">Reset Password</h3>
			      		</div>
			      	</div>
                      @if(session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                      @endif
							<form method="POST" action="{{ route('password.request') }}" class="signin-form">
                           
                            @csrf
			      		<div class="form-group mb-3">
			      			<label class="sr-only" for="email">email</label>
			      			<input type="email" name="email" id="email" class="form-control" placeholder="Email address" required>
                              @error('email')
                                <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
		            <div class="form-group">
		            	<input type="submit" name="reset" id="reset" class="form-control btn btn-primary rounded submit px-3" value="Reset">
		            </div>
		            <div class="form-group d-md-flex">
		            </div>
		          </form>
                        <p class="login-card-footer-text">Don't have an account? <a class="color-yellow" href="{{ route('register') }}" class="text-reset">Register here</a></p>
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
