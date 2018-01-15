@extends('layouts.layout')

@section('content')

	<section class="content-header">
      <h1>
        Bienvenido 
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Inicio</a></li>
        <li><a href="{{ route('users.index') }}">Usuarios</a></li>
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
					<form role="form" method="POST" action="{{ route('users.store') }}">
						{{ csrf_field() }}
						<div class="box-body">
							
							@include('layouts.peopleDataCreate')

							<div style="border-top-left-radius: 0; border-top-right-radius: 0; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; border-top: 3px solid #00c0ef; background-color: #fff;">
								<center><h4 class="box-title"><i class="fa fa-user"> Datos del Usuario</i></h4></center>
							</div>
							<div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">
								<label>Nombre de Usuario</label>
								<input class="form-control" id="username" type="text" name="username" value="{{ old('username') }}" placeholder="Ingrese el Nombre de Usuario" >

								@if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif

							</div>
							<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
								<label>Correo</label>
								<input class="form-control" id="email" type="email" name="email" placeholder="Ingrese el Correo Electronico" >

								@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

							</div>
							<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
								<label>Clave</label>
								<input class="form-control" id="password" type="password" name="password" placeholder="Ingrese la Clave de Usuario" >

								@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

							</div>
						</div>
						<div class="box-footer">
							<a href="{{route('home')}}" class="btn btn-danger">Cancelar</a>
							<button type="submit" class="btn btn-info pull-right">Crear Usuario</button>
						</div>
					</form>
				</div>

			</div>
      	</div>
    </section>

@endsection