
@extends('layouts.app')

@section('title')
	Create Item
@endsection


@section('content')
	<h1 class="text-center my-5">Create Todo</h1>

	<div class="row justify-content-center">
		<div class="col-md-8">
			
			<div class="card card-defatult">
				<div class="card-header">create new Todo</div>
				<div class="card-body">
					<form action="/store" method="POST">
						@csrf
		
						<div class="form-group">
							<input type="text" class="form-control" name="name" placeholder="name">
						</div>

						<div class="form-group">
							<textarea name="description" class="form-control" cols="30" rows="5" placeholder="description"></textarea>
						</div>

						<div class="form-group">
							<button class="btn btn-success" type="submit">Save</button>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>



@endsection

