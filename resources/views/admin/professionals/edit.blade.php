 @extends('layouts.admin')
        

@section('content')       
<div class="col-sm-6">

		<h2>Edit Plan</h2>

		{!! Form::model($proffesional, ['method' => 'PATCH', 'action' => ['AdminProfessionalsController@update', $proffesional->id]]) !!}


		
		<div class="form-grup">

            {!! Form::label('membership_id', 'Membership') !!}
            {!! Form::select('membership_id', [''=>'Choose Option'] + $memberships, null, ['class' => 'form-control']) !!}

	    </div>

 
		<div class="form-group">

			{!! Form::submit('Edit Pro', ['class' => 'btn btn-primary']) !!}

		</div>
		
		
		@include('includes.createError')


</div>






@stop