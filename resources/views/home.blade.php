@extends('template')

@section('content')
	<div class="container">
				@include('components.RemiderList', ['remiders' => $remiders])
				@include('components.NewRemider')
	</div>
@endsection
