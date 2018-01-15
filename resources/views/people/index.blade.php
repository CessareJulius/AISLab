@extends('layouts.layout')

@section('content')

	<section class="content-header">
      <h1>
        Bienvenido 
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ asset('/users/home') }}"><i class="fa fa-home"></i> Inicio</a></li>
        <li><a href="#">Personas</a></li>
        <li class="active">Todas</li>
      </ol>
    </section>

    <section class="content">
    	<div class="row">
    		<div class="col-xs-12">

				<div class="box">
		            <div class="box-header">
		              <center><h3 class="box-title">Personas registradas</h3></center>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
		            	@unless(empty($people))
		            	<table id="example1" class="table table-bordered table-hover">
		            		<thead>
		            			<tr>
		            				<th>ID</th>
		            				<th>CEDULA</th>
		            				<th>NOMBRE</th>
		            				<th>APELLIDO</th>
		            				<th>TIPO</th>
		            				<th>ACCIONES</th>
		            			</tr>
		            		</thead>
		            		<tbody>
		            			@foreach($people as $person)
			            			<tr>
			            				<td>{{ $person->id }}</td>
			            				<td>{{ $person->dni }}</td>
			            				<td>{{ $person->name }}</td>
			            				<td>{{ $person->lastname }}</td>
			            				<td>{{ $person->type }}</td>
			            				<td>
			            					<center>
			            						<a class="btn btn-info btn-sm" href="{{ route('people.show', $person->id ) }}">Ver</a>
			            						<a class="btn btn-primary btn-sm" href="{{ route('people.edit', $person->id ) }}">Editar</a>
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


