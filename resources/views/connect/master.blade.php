<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/static/css/connect.css?v='.time()) }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/25a4de0904.js" crossorigin="anonymous"></script>
</head>
<body>

		@if(Session::has('message'))
			<div class="container">
				<div class="alert alert- {{Session::get('typealert') }}" style="display:none;">
					{{ Session::get('message') }}
					@if ($errors->any())
					<ul>
						@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach	
					</ul>
					@endif
					<script>
						$('.alert').slideDown();
						setTimeout(function(){ $('.alert').slideUp; }, 1000);
					</script>
				</div>
			</div>
		@endif

	@section('content')
	hola mundo
	@show

</body>
</html>