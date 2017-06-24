<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset("css/app.css")}}">
</head>

<body>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/test" method="post">
{{csrf_field()}}
	<div class="form-group">
		<label>username</label>
		<input type="text" name="username" class="form-control">
	</div>
	<div class="form-group">
		<label>email</label>
		<input type="email" name="email" class="form-control">
	</div>
	<div class="form-group">
		<button type="submit">Created New User</button>
	</div>	
</form>
</body>
</html>