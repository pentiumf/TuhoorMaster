@extends('layouts.admin')
        

@section('content')       
<div class="col-sm-6">

		<h2>Create Category</h2>

		{!! Form::open(['method' => 'POST', 'action' => 'AdminProfessionalsCategories@store']) !!}

		<div class="form-grup">

			{!! Form::label('name', 'Name') !!}
			{!! Form::text('name', null, ['class' => 'form-control']) !!}

		</div>
		
		<div class="form-grup">

			{!! Form::label('img', 'Image') !!}
			{!! Form::text('img', null, ['class' => 'form-control']) !!}

		</div>
		
		<div class="form-grup">

            {!! Form::label('prosection_id', 'Section Id') !!}
            {!! Form::select('prosection_id', [''=>'Choose Option'] + $sections, null, ['class' => 'form-control']) !!}

	    </div>

 
		<div class="form-group">

			{!! Form::submit('Create Category', ['class' => 'btn btn-primary']) !!}

		</div>

		{!! Form::close() !!}


</div>

@include('includes.createError')


@stop