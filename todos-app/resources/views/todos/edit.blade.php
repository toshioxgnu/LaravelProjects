
@extends('layouts.app')

@section('title')
	Edit {{ $todo -> name }}
@endsection


@section('content')
	<h1 class="text-center my-5"><small>{{$todo->name}}</small></h1>

	<div class="row justify-content-center">
		<div class="col-md-8">
			
			<div class="card card-defatult">
				<div class="card-header"> Edit </div>
				<div class="card-body">
					@if($errors->any())
						<div class="alert alert-danger">
							@foreach($errors->all() as $error)
								<ul class="list-group">
									<li class="list-group-item">
										{{ $error }}
									</li>
								</ul>
							@endforeach 
						</div>
					@endif
					<form action="/edit" method="POST">
						@csrf

						<input type="hidden" name="id" value=" {{$todo->id}} ">
		
						<div class="form-group">
							<input type="text" class="form-control" name="name" placeholder="name" value=" {{$todo -> name}} ">
						</div>

						<div class="form-group">
							<textarea name="description" class="form-control" cols="30" rows="5" placeholder="description">{{ $todo->description }}</textarea>
						</div>

						<div class="form-group">
							<button class="btn btn-success" type="submit">Update</button>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>



@endsection

