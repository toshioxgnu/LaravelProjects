@extends('layouts.app')

@section('content')


	<div class="d-flex justify-content-end mb-2">
		<a href=" {{ route('categories.create') }} " class="btn btn-success" title="Add"><i class="fas fa-plus-square"></i></a>
	</div>


	<div class="card card-default">
		<div class="card-header">Categories</div>
        <div class="card-body">
            <table class="table stripped-table">
                <tr>
                    <th>Name</th>
                </tr>

                <tbody>
                @foreach( $categories as $categorie )
                    <tr>
                        <td>
                            {{ $categorie -> name  }}
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
	</div>
@endsection
