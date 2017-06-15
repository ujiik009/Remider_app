@extends('template')

@section('content')
	<div class="container">
				{{-- @include('components.RemiderList', ['remiders' => $remiders])
				@include('components.NewRemider' ,['types'=>$types]) --}}
				@include('components.RemiderTypeList',['remiderTypes'=>$types])
				@include('components.NewRemiderType')
				
	</div>
@endsection
