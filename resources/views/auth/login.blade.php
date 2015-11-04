@extends('app')

@section('content')

<section id="login-form">
	<div class="mdl-card mdl-shadow--2dp wrapper">
		<div class="mdl-card__supporting-text">
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Whoops!</strong> There were some problems with your input.<br><br>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

		</div>
		<div class="mdl-card__supporting-text">
			<form class="form-horizontal" role="form" autocomplete="off" method="POST" action="{{ url('/auth/login') }}">
				{!! csrf_field() !!}

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
					<input class="mdl-textfield__input" type="email" class="form-control" name="email" value="{{ old('email') }}" />
					<label class="mdl-textfield__label" for="sample3">Email</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
					<input class="mdl-textfield__input"type="password" name="password"/>
					<label class="mdl-textfield__label" for="sample3">Password</label>
				</div>

				<div class="mdl-card__actions mdl-card--border text-center">
					<button type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored">
						Login
					</button>
					<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="{{ url('/password/email') }}">Forgot Your Password?</a>

				</div>
			</form>

	</div>
</section>

@endsection
