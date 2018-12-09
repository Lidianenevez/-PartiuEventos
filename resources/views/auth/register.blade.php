@extends('layouts.site')

@section('content')
<!--==========================
    Modal Cadastro
    ============================-->
		<div class="row justify-content-center">
          <div class="col-md-5">
            <div class="" id="cadastro" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
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
                         <!-- <small class="logintext">{{ __('Cadastre-se') }}</small>-->
                        </div>
                        <form method="POST" action="{{ route('register') }}">
													@csrf
                          <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                              </div>
															<input id="name" type="text" placeholder="{{ __('Nome') }}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}">
															@if ($errors->has('name'))
																<span class="invalid-feedback" role="alert">
																	<strong>{{ $errors->first('name') }}</strong>
																</span>
															@endif
                            </div>
                          </div>
                          <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-at" aria-hidden="true"></i></span>
                              </div>
															<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('E-Mail válido') }}" name="email" value="{{ old('email') }}" required>
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
                              <input id="password" type="password" placeholder="{{ __('Senha') }}" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
															@if ($errors->has('password'))
																<span class="invalid-feedback" role="alert">
																	<strong>{{ $errors->first('password') }}</strong>
																</span>
															@endif
                            </div>
                          </div>
													<div class="form-group">
                            <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                              </div>
                              <input id="password-confirm" type="password" placeholder="{{ __(' Confirme a Senha') }}" class="form-control" name="password_confirmation" required>
                            </div>
                          </div>
                          <div class="custom-control custom-control-alternative custom-checkbox">
                            <input class="custom-control-input" id="customCheckRegister" type="checkbox" required>
                            <label class="custom-control-label" for="customCheckRegister">
                              <span> <a href="#" style="color: blue">Não sou robô</a> </span>
                            </label>
                          </div>
                          <div class="text-center">
                            <button type="submit" class="btn btn2 my-4">{{ __('Cadastre-se') }}</button>
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
      </div>



<!-- <div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Register') }}</div>
				<div class="card-body">
					<form method="POST" action="{{ route('register') }}">
						@csrf

						<div class="form-group row">
							<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

							<div class="col-md-6">
								<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

								@if ($errors->has('name'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('name') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

							<div class="col-md-6">
								<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
							<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

							<div class="col-md-6">
								<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
							</div>
						</div>

						<div class="form-group row mb-0">
							<div class="col-md-6 offset-md-4">
								<button type="submit" class="btn btn-primary">
									{{ __('Register') }}
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div> -->
@endsection
