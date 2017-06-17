@extends('template')

@section('content')
	<div class="container">
	<h2>Finished Remider :</h2>
		<table class="table table-bordered">
			<tr>
				<td>RemiderName</td>
				<td>Finish At</td>
			</tr>

			@foreach ($remiders as $remider)
				<tr>
					<td>{{$remider->body}} ({{ $remider->type->typeName }})</td>
					<td>{{$remider->deleted_at}}</td>
				</tr>
			@endforeach
		</table>
				
	</div>
@endsection
