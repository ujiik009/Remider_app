 <h3> New Remider Type	</h3>
 {{-- {!! Form::open(array( 'name'=> 'ice','method'=>'post')) !!} --}}
  <form method="post" action="Remider_type/new">
  		<div class="form-group">
  			<label>
  				Remider Type :
  			</label>
  		  <input type="text" class="form-control" name="name" placeholder="Remider Type Name" required="">
  		</div>

  		<div class="form-group">
  			{{csrf_field()}}
  			<input class="btn btn-success" type="submit" value="Create New Remider Type">
  			
  		</div>
      @if (count($errors) > 0)
        <ul>
        @foreach ($errors->all() as $errors)
          <li>{{ $errors }}</li>
        @endforeach
        </ul>
      @endif
{{-- {!!Form::close()!!} --}}
  </form>