 <h3> New Remider	</h3>
 {{-- {!! Form::open(array( 'name'=> 'ice','method'=>'post')) !!} --}}
  <form method="post" action="remider/new">
  		<div class="form-group">
  			<label>
  				Remider :
  			</label>
  			<textarea name="remider" rows="8" cols="80" class="form-control"></textarea>
  		</div>
  		<div class="form-group">
  			{{csrf_field()}}
  			<input class="btn btn-success" type="submit" value="Create New Remider">
  			
  		</div>
{{-- {!!Form::close()!!} --}}
  </form>