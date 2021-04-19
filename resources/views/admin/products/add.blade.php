@extends('admin.master')

@section('title', 'Agregar Producto')

@section('breadcrumb')
<li class="breadcrumb-item">
	<a href="{{ url('/admin/products')}} "><i class="fas fa-boxes"></i> Productos</a>	
</li>
<li class="breadcrumb-item">
	<a href="{{ url('/admin/product/add') }}"><i class="fas fa-plus"></i> Agregar producto</a>
</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="panel shadow">
		<div class="header">
			<h2 class="title"><i class="fas fa-plus"></i> Agregar producto</h2>
		</div>

		<div class="inside">
			{!!Form::open(['url' => '/admin/product/add'])!!}
			<div class="row">
				<div class="col-md-8">
					<label for="name">Nombre del producto</label>
					{!!Form::text('name', null, ['class' => 'form-control'])!!}
				</div>
			</div>
			{!!Form::close()!!}			
		</div>
	</div>
</div>
@endsection