 @extends('layouts.admin')


@section('content')


	<div class="col-sm-6">

		<table class="table">
		    <thead>
		      <tr>
		        <th>Id</th>
		        <th>Company Name</th>
		        <th>User</th>
		        <th>Category</th>
		        <th>Membership</th>
		        <th>About</th>
		        <th>email</th>
		        <th>Contact 1</th>
		        <th>Contact 2</th>
		        <th>Country</th>
		        <th>Region</th>
		        <th>City</th>
		        <th>Website</th>
		        <th>Profile Photo</th>
		        <th>Cover Photo</th>
		        <th>Created At</th>
		        <th>Updated At</th>
		      </tr>
		    </thead>
		    <tbody>

		    	@if ($professionals)

		    	@foreach ($professionals as $professional) 

		    		<tr>
				        <td>{{$professional->id}}</td> 
				        <td><a href="{{route('professionals.edit', $professional->id)}}">{{$professional->name}}</a></td>
				        <td>{{$professional->user->name}}</td>
				        <td>{{$professional->category->name}}</td>
				        <td>{{$professional->membership->name}}</td>
				        <td>{{$professional->about}}</td>
				        <td>{{$professional->email}}</td>
				        <td>{{$professional->first_contact}}</td>
				        <td>{{$professional->second_contact}}</td>
				        <td>{{$professional->country->iso}}</td>
				        <td>{{$professional->region}}</td>
				        <td>{{$professional->city}}</td>
				        <td>{{$professional->website}}</td>
				        <td>{{$professional->profile_photo}}</td>
				        <td>{{$professional->cover_photo}}</td>
				        <td>{{$professional->created_at ? $professional->created_at->diffForHumans() : 'No Date'}}</td>
				        <td>{{$professional->updated_at ? $professional->updated_at->diffForHumans() : 'No Date'}}</td>
				      </tr> 


		    	@endforeach

		      	@endif

		    </tbody>
		  </table>

	</div>


@stop