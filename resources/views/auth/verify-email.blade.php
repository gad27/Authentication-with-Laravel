@extends('template')

<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(/image/logo.jpg);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4"></h3>
			      		</div>
			      	</div>
                      @if(session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                      @endif
                      <p class="login-card-login-card-description">You must verify your email address, please check your email for verification link</p>
						<form method="POST" action="{{ route('verification.send') }}" class="signin-form">
                            @csrf
		            <div class="form-group">
		            	<input type="submit" name="login" id="login" class="form-control btn btn-primary rounded submit px-3" value="Resend Email">
		            </div>
		            <div class="form-group d-md-flex">
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
