@extends("app")

@section('pagetitle')
Show Single User
@stop

@section('content')
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<td>ID</td>
				<td>First Name</td>
				<td>Last Name</td>
				<td>Email</td>
				<td>Actions</td>
			</tr>
		</thead>
		<tbody>
			
				<tr>
					<td>{{$user->id}}</td>
					<td>{{$user->firstname}}</td>
					<td>{{$user->lastname}}</td>
					<td>{{$user->email}}</td>
					<td width="380">
						<a class="btn btn-small btn-success" href="{{ URL::to('users/' . $user->id)}}">Show this User</a>
                                                <a class="btn btn-small btn-info" href="{{ URL::to('users/' . $user->id . '/edit')}}">Edit this User</a>
					</td>
				</tr>

			
		</tbody>


		</table>
	</table>
        <h2>User's Books:</h2>

        	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<td>Title</td>
				<td>Author</td>
				<td>Year</td>
				<td>Genre</td>
				<td>Actions</td>
			</tr>
		</thead>
		<tbody>
			@foreach($user_books as $book)
				<tr>
					<td>{{$book->title}}</td>
					<td>{{$book->author}}</td>
					<td>{{$book->year}}</td>
					<td>{{$book->genre}}</td>

					<td width="385">
                                            <a class="btn btn-small btn-success" href="{{ URL::to('books/' . $book->id)}}">Show this Book</a>
                                            <a class="btn btn-small btn-success" href="{{ URL::to('books/' . $book->id)}}">Return this Book</a>
                                            
                                            
                                            
                                        </td>
				</tr>

			@endforeach
		</tbody>
	</table>
        
        
        
@stop