@extends('layouts.dashboard')


@section('content')

	<h1 class="text-center">Create Profile</h1>

	{!! Form::open(['method' => 'POST', 'action' => 'UserProfessionalController@store', 'files' => true]) !!}
	
	<div class="form-grup">

		{!! Form::label('name', 'Name') !!}
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}

	</div>
	
	
	<div class="form-grup">
		
		{!! Form::label('procategory_id', 'Pro Category') !!}
        {!! Form::select('procategory_id', [''=>'Choose Option'] + $categories, null, ['class' => 'form-control']) !!}

	</div>
	
	<div class="form-grup">
		
		{!! Form::label('protype_id', 'Business Type') !!}
        {!! Form::select('protype_id', [''=>'Choose Option'] + $types, null, ['class' => 'form-control']) !!}

	</div>
	
	<div class="form-grup">

		{!! Form::label('about', 'About') !!}
		{!! Form::textarea('about', null, ['class' => 'form-control', 'placeholder' => 'About']) !!}

	</div>
	
	
	<div class="form-grup">

		{!! Form::label('email', 'Email') !!}
		{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}

	</div>
	
	
	<div class="form-grup">

		{!! Form::label('first_contact', 'Contact 1') !!}
		{!! Form::text('first_contact', null, ['class' => 'form-control', 'placeholder' => 'Contact 1']) !!}

	</div>
	
	
	<div class="form-grup">

		{!! Form::label('second_contact', 'Contact 2') !!}
		{!! Form::text('second_contact', null, ['class' => 'form-control', 'placeholder' => 'Contact 2']) !!}

	</div>
	
	<div class="form-grup">

        {!! Form::label('country_id', 'Country') !!}
        {!! Form::select('country_id', [''=>'Choose Option'] + $countries, null, ['class' => 'form-control']) !!}

	</div>
	
	
	<div class="form-grup">

        {!! Form::label('region', 'Region/State Of province') !!}
        {!! Form::text('region', null, ['class' => 'form-control', 'placeholder' => 'Region']) !!}

	</div>
	
	<div class="form-grup">

        {!! Form::label('city', 'City / Residence') !!}
        {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'City']) !!}

	</div>
	
	<div class="form-grup">

        {!! Form::label('website', 'Website url') !!}
        {!! Form::text('website', null, ['class' => 'form-control', 'placeholder' => 'Website url']) !!}

	</div>
	
	<div class="form-grup">

		{!! Form::label('profile_photo', 'Profile Photo') !!}
		{!! Form::file('profile_photo', null) !!}

	</div>
	
	<div class="form-grup">

		{!! Form::label('cover_photo', 'Cover Photo') !!}
		{!! Form::file('cover_photo', null) !!}

	</div>

    <div class="form-group">

		{!! Form::submit('Create Profile', ['class' => 'btn btn-primary', 'rows'=>3]) !!}

	</div>

	{!! Form::close() !!}
 
     @include('includes.createError')
 
@stop
