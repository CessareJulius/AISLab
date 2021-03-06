@extends('layouts.layout')

@section('content')

	<section class="content-header">
      <h1>
        Bienvenido 
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ asset('/users/home') }}"><i class="fa fa-home"></i> Inicio</a></li>
        <li class="active">Usuarios</li>
      </ol>
    </section>

    <section class="content">
    	<div class="row">
    		<div class="col-xs-12">

				<div class="box">
		            <div class="box-header">
		              <h3 class="box-title" style="margin-left: 38%;">Usuarios Registrados</h3>
		              <div class="pull-right">
		                  <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="ion ion-tshirt">&nbsp;</i>Registrar Nuevo</button>
		                </div>
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
		            				<th><center>ACCIONES</center></th>
		            			</tr>
		            		</thead>
		            		<tbody>
		            			@foreach($users as $user)
			            			<tr>
			            				<td>{{ $user->id }}</td>
			            				{{-- <td>$user->people->dni</td> --}}
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
			            						<a class="btn btn-info btn-sm" href="{{ route('users.show', $user->id) }}">Ver</a>
			            						<a class="btn btn-primary btn-sm" href="{{ route('users.edit', $user->id) }}">Editar</a>
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

    @include('layouts.modalUser')

@endsection


