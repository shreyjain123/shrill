@extends('layouts.app')

@section('content')
<div class="wrap-top">
	{!! Form::open(['url' => '/user_profile/submit', 'id' => 'user-profile-form']) !!}

			{{Form::label('bio', 'Biography')}}
    		{{Form::textarea('bio','', ['id' => 'bio' , 'placeholder' => 'Bio'])}}
			{{Form::submit('Submit', ['id' => 'submit-user-profile'])}}

{!! Form::close() !!}
</div>

@endsection
