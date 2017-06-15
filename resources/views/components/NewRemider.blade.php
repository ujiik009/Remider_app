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
          <label>Type :</label>
          <select name = "type" class="form-control">
            @foreach ($types as $type)
              <option value="{{ $type->id }}"> {{ $type->typeName }} </option>
            @endforeach
          </select>
      </div>
  		<div class="form-group">
  			{{csrf_field()}}
  			<input class="btn btn-success" type="submit" value="Create New Remider">
  			
  		</div>
{{-- {!!Form::close()!!} --}}
  </form>