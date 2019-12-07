
@extends('layouts.app')

@section('title')
	{{$todo->name}}
@endsection



@section('content')

	<h1 class="text-center my-5">{{ $todo -> name}}</h1>

		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="card card-default">
					<?php
		$timeStamp = $todo->created_at;
		$timeStamp = date( "d/m/Y", strtotime($timeStamp));
		?>
			<div class="card-header"><small>  {{$timeStamp}} </small></div>
			<div class="card-body"> {{$todo->description}} </div>
		</div>
			</div>
		</div>

@endsection
