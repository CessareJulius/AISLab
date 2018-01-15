@extends('layouts.layout')

@section('content')

	<section class="content-header">
      <h1>
        Bienvenido 
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Inicio</a></li>
        <li><a href="{{ route('people.type', 'est') }}">Estudiantes</a></li>
        <li class="active">Agregar Nuevo</li>
      </ol>
    </section>
	
	<section class="content">
    	<div class="row">
    		<div class="col-xs-6">

    			<div style="margin-left: 50%; position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px;" class="box box-info">
					<div class="box-header with-border">
						<center><h3 class="box-title"><i class="fa fa-male"> Datos Personales</i></h3></center>
					</div>
					<form role="form" method="POST" action="{{ route('people.store') }}">
						{{ csrf_field() }}
						<div class="box-body">

							@include('layouts.peopleDataCreate')

						</div>
						<div class="box-footer">
							<a href="{{route('home')}}" class="btn btn-danger">Cancelar</a>
							<button type="submit" class="btn btn-info pull-right">Crear Estudiante</button>
						</div>
					</form>
				</div>

    		</div>
      	</div>
    </section>

@endsection