@extends('layouts.master',['title'=>$title])

@section('content')
	
	<div class="container">
		<div class="row">
			
			<div class="col-md-6 col-md-offset-3">
					<div class="well">
						<legend>REGISTRATION</legend>
						{{ Form::open(array('url'=>'users/create', 'class'=>'form-signup'))}}

						<ul>
							@foreach($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
										
						{{ Form::text('firstname','',array('placeholder'=>'First Name','class'=>'form-control',Input::old('firstname')))}} <br>
						{{ Form::text('lastname','',array('placeholder'=>'Last Name','class'=>'form-control',Input::old('lastname')))}} <br>
						{{ Form::text('email_id','',array('placeholder'=>'Email-Id','class'=>'form-control',Input::old('email_id')))}} <br>
						{{ Form::password('password',array('placeholder'=>'Password','class'=>'form-control'))}} <br>
						{{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Confirm Password')) }} <br>
						{{ Form::submit('Sign-Up',array('class'=>'btn btn-success'))}}
						&nbsp;&nbsp;{{ HTML::link('/welcome','Cancel',array('class'=>'btn btn-danger')) }}
						{{ Form::close() }}

					</div>			
			</div>
		</div>

	</div>

@endsection