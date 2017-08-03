 @extends('layouts.admin')


@section('content')



	<div class="col-sm-6">

		<table class="table">
		    <thead>
		      <tr>
		        <th>Id</th>
		        <th>Name</th>
		        <th>Section</th>
		        <th>Image</th>
		        <th>Created At</th>
		        <th>Updated At</th>
		      </tr>
		    </thead>
		    <tbody>

		    	@if ($categories)

		    	@foreach ($categories as $category) 

		    		<tr>
				        <td>{{$category->id}}</td> 
				        <td><a href="{{route('categories.edit', $category->id)}}">{{$category->name}}</a></td>
				        <td>{{$category->section->name}}</td>
				        <td>{{$category->img}}</td>
				        <td>{{$category->created_at ? $category->created_at->diffForHumans() : 'No Date'}}</td>
				        <td>{{$category->updated_at ? $category->updated_at->diffForHumans() : 'No Date'}}</td>
				      </tr> 


		    	@endforeach

		      	@endif

		    </tbody>
		  </table>

	</div>


@stop