<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title') - ECOMMERCE ALEXANDER</title>
	<meta name="csrf-token" content="{{ csrf_token()}}">
	<meta name="routeName" content="{{ Route::currentRouteName() }}">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	<link rel="stylesheet" href="{{ url('/static/css/admin.css?v='.time()) }}">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;1,700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/25a4de0904.js" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script><script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
	</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
</script>

<script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip()
		});
	</script>
</head>
<body>

	<div class="wrapper">
		<div class="col1">@include('admin.sidebar')</div>
		<div class="col2">
			<nav class="navbar navbar-expand-lg shadow">
				<div class="collapse.navbar-collapse">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a href=" {{ url('/admin') }}" class="nav-link">
								<i class="fas fa-home"></i> Dashboard
							</a>							
						</li>						
					</ul>
				</div>
			</nav>

			<div class="page">

				<div class="container-fluid">
					<nav aria-label="breadcrumb shadow">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href=" {{ url('/admin') }}"><i class="fas fa-home"></i> Dashboard</a>
							</li>
							@section('breadcrumb')
							@show
						</ol>
					</nav>
				</div>

		@if(Session::has('message'))
			<div class="container-fluid">
			<div class="alert alert-{{Session::get('typealert') }} mtop16" style="display:block; margin-bottom: 16px;">
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
	</div>
	@endif

	@section('content')
	@show

</div>

</body>
</html>