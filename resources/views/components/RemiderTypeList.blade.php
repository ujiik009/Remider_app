
	<h2>Remider Type</h2>
	<div  class="display-remider-type">
			@foreach ($remiderTypes as $remiderType)
				<div class="well">
					<span>{{$remiderType->typeName}}</span>
					
				</div>
			@endforeach

	</div>



	
	