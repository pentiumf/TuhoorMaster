 @extends('layouts.dashboard')


@section('content')



	<div class="col-sm-6">

		<table class="table">
		    <thead>
		      <tr>
		        <th>Id</th>
		        <th>Name</th>
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


		    		<tr>
				        <td>{{$profile->id}}</td>  
				        <td><a href="{{route('professional.edit', $profile->id)}}">{{$profile->name}}</a></td>  
				        <td>{{$profile->category->name}}</td>  
				        <td>{{$profile->membership->name}}</td>  
				        <td>{{$profile->about}}</td>  
				        <td>{{$profile->email}}</td> 
				        <td>{{$profile->first_contact}}</td>
				        <td>{{$profile->second_contact}}</td>
				        <td>{{$profile->country->iso}}</td>
				        <td>{{$profile->region}}</td>
				        <td>{{$profile->city}}</td>
				        <td>{{$profile->website}}</td>
				        <td>{{$profile->profile_photo}}</td> 
				        <td>{{$profile->cover_photo}}</td>
				        <td>{{$profile->created_at ? $profile->created_at->diffForHumans() : 'No Date'}}</td>
				        <td>{{$profile->updated_at ? $profile->updated_at->diffForHumans() : 'No Date'}}</td>
				      </tr> 


		    </tbody>
		  </table>

	</div>


@stop