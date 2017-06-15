<h2>Your Remider :</h2>
@foreach ($remiders as $remider)
	<div class="well">
	<span>{{$remider->body}} <b>({{ $remider->type->typeName }})</b></span>
	<form method="post" action="/remider/delete" >
		{{csrf_field()}}
		<input class="btn btn-success" type="submit" value="Finish" />
		<input type="hidden" name="_method" value="delete"/>
		<input type="hidden" name="id" value="{{$remider->id}}">
	</form>
</div>
@endforeach
