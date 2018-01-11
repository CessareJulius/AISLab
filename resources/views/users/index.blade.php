@extends('layouts.layout')

@section('content')

	<section class="content-header">
      <h1>
        Bienvenido 
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ asset('/users/home') }}"><i class="fa fa-home"></i> Inicio</a></li>
        <li><a href="#">Usuarios</a></li>
        <li class="active">Todos</li>
      </ol>
    </section>

    <section class="content">
    	<div class="row">
    		<div class="col-xs-12">

				<div class="box">
		            <div class="box-header">
		              <center><h3 class="box-title">Lista de Usuarios</h3></center>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
		            	@unless(empty($users))
		            	<table id="example1" class="table table-bordered table-hover">
		            		<thead>
		            			<tr>
		            				<th>ID</th>
		            				<th>USUARIO</th>
		            				<th>CARGO</th>
		            				<th>CORREO</th>
		            				<th>STATUS</th>
		            				<th>ACCIONES</th>
		            			</tr>
		            		</thead>
		            		<tbody>
		            			@foreach($users as $user)
			            			<tr>
			            				<td>{{ $user->id }}</td>
			            				<td>{{ $user->username }}</td>
			            				<td>{{ $user->position }}</td>
			            				<td>{{ $user->email }}</td>
			            				@if($user->active == 1)
			            					<td>Activo</td>
			            				@else
			            					<td>Inactivo</td>
			            				@endif
			            				<td>
			            					<center>
			            						<a class="btn btn-info btn-sm" href="{{ asset('/users/view').'/'.$user->id }}">Ver</a>
			            						<a class="btn btn-primary btn-sm" href="{{ asset('/users/edit').'/'.$user->id }}">Editar</a>
			            						<a class="btn btn-danger btn-sm" href="#">Eliminar</a>
			            					</center>
			            				</td>
			            			</tr>
			            		@endforeach
		            		</tbody>
		            	</table>
		            	@else
		            		<p>No hay usuarios registrados</p>
		            	@endunless
		            </div>
		            <!-- /.box-body -->
		        </div>

        	</div>
      	</div>
    </section>

@endsection


