@extends('layouts.master')

@section('content')
	<div class="container-fluid">
		 @if(Session::has('message'))
            <p class="alert">{{ Session::get('message') }}</p>
        @endif
	</div>
	<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
		   <div class="well">
			
				<legend>Login</legend>
				
				{{ Form::open(array('url'=>'users/login','class'=>'form-signin')) }}
									
				@if($errors->any())
					<div class="alert alert-error">
						<a href="#" class="close" data-dismiss="alert">&time;</a>
						{{ implode ('',$error->all('<li class="error">:mesage:</li>'))}}
					</div>
				@endif
					{{ Form::text('email','',array('placeholder'=>'Email','class'=>'form-control'),Input::old('email')) }} <br />
					{{ Form::password('password',array('placeholder'=>'password','class'=>'form-control')) }} <br />
					
					{{ Form::submit('LOGIN',array('class'=>'btn btn-success' )) }}
					
				{{ Form::close() }}		
			
			</div>	
	   
	    </div>
	  </div>
	</div>
@endsection