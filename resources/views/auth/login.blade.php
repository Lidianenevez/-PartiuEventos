@extends('layouts.site')

@section('content')
<div class="row justify-content-center">
	<div class="col-md-4">
		<div class="" id="login" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
			<div class="modal-dialog modal- modal-dialog-centered modal-sm" style="margin-top:100px" role="document">
				<div class="modal-content">
					<div class="modal-body p-0">
						<div class="card bg-secondary shadow border-0">
							<div class="card-header bg-white pb-2">
								<div class="text-muted text-center mb-3">
								</div>
								<div class="btn-wrapper text-center">
									<a href="#" class="btn btn-neutral btn-icon">
										<span class="btn-inner--icon">
											<img src="img/icon/google.svg">
										</span>
										<span class="btn-inner--text">Google</span>
									</a>
								</div>
							</div>
							<div class="card-body px-lg-5 py-lg-5 cardmodal">
								<div class="text-center text-muted mb-4">
									<small class="logintext">{{ __('Login') }}</small>
								</div>
								<form method="POST" action="{{ route('login') }}">
									@csrf
									<div class="form-group mb-3">
										<div class="input-group input-group-alternative">
											<div class="input-group-prepend">
												<span class="input-group-text"><i class="fa fa-at" aria-hidden="true"></i></span>
											</div>
											<input id="email" type="email" placeholder="{{ __('E-Mail Address') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">
											@if ($errors->has('email'))
												<span class="invalid-feedback" role="alert">
													<strong>{{ $errors->first('email') }}</strong>
												</span>
					  					@endif
										</div>
									</div>
									<div class="form-group">
										<div class="input-group input-group-alternative">
											<div class="input-group-prepend">
												<span class="input-group-text"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
											</div>
											<input id="password" type="password" placeholder="{{ __('Password') }}" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">
											@if ($errors->has('password'))
												<span class="invalid-feedback" role="alert">
													<strong>{{ $errors->first('password') }}</strong>
												</span>
											@endif
										</div>
									</div>
									<div class="custom-control custom-control-alternative custom-checkbox">
										<input class="custom-control-input" name="remember" id="customCheckLogin" type="checkbox" {{ old('remember') ? 'checked' : '' }}> 
										<label class="custom-control-label" for="customCheckLogin">
											<span>{{ __('Remember Me') }}</span>
										</label>
									</div>
									<div class="text-center">
										<button type="submit" class="btn btn2 my-4">{{ __('Login') }}</button>
										@if (Route::has('password.request'))
											<a class="btn btn-link" href="{{ route('password.request') }}">
											{{ __('Forgot Your Password?') }}
											</a>
										@endif
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
			<!-- <div class="card">
				<div class="card-header">{{ __('Login') }}</div>

				<div class="card-body">
					<form method="POST" action="{{ route('login') }}">
						@csrf

						<div class="form-group row">
							<label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

							<div class="col-md-6">
								<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

								@if ($errors->has('email'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

							<div class="col-md-6">
								<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

								@if ($errors->has('password'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-6 offset-md-4">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

									<label class="form-check-label" for="remember">
										{{ __('Remember Me') }}
									</label>
								</div>
							</div>
						</div>

						<div class="form-group row mb-0">
							<div class="col-md-8 offset-md-4">
								<button type="submit" class="btn btn-primary">
									{{ __('Login') }}
								</button>

								@if (Route::has('password.request'))
									<a class="btn btn-link" href="{{ route('password.request') }}">
										{{ __('Forgot Your Password?') }}
									</a>
								@endif
							</div>
						</div>
					</form>
				</div>
			</div> -->
@endsection