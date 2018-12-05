@extends('layouts.site')

@section('content')
<div class="container" style="margin-top:100px">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Dashboard</div>

				<div class="card-body">
					@if (session('msg_success'))
						<div class="alert alert-success">
							{{ session('msg_success') }}
						</div>
					@endif
					@if (session('msg_danger'))
						<div class="alert alert-danger">
							{{ session('msg_danger') }}
						</div>
					@endif

					You are logged in!
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
