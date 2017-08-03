@extends('layouts.admin')
        

@section('content')       
<div class="col-sm-6">

		<h2>Create Category</h2>

		{!! Form::model($category, ['method' => 'PATCH', 'action' => ['AdminProfessionalsCategories@update', $category->id]]) !!}

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

			{!! Form::submit('Edit Category', ['class' => 'btn btn-primary']) !!}

		</div>

		{!! Form::close() !!}
		
		
		{!! Form::open(['method' => 'DELETE', 'action' => ['AdminProfessionalsCategories@destroy', $category->id]]) !!}

        <div class="form-group">

            {!! Form::submit('Delete Category', ['class' => 'btn btn-danger']) !!}

        </div>

        {!! Form::close() !!}


</div>

@include('includes.createError')

@stop