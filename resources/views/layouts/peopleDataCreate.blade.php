	<div class="form-group {{ $errors->has('dni') ? ' has-error' : '' }}">
		<label>Cedula</label>
		<input class="form-control" id="dni" type="number" name="dni" placeholder="Ingrese el Número de Cedula"  autofocus="true">

		@if ($errors->has('dni'))
		<span class="help-block">
			<strong>{{ $errors->first('dni') }}</strong>
		</span>
		@endif

	</div>
	<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
		<label>Nombre</label>
		<input class="form-control" id="name" type="text" name="name" placeholder="Ingrese el Nombre" >

		@if ($errors->has('name'))
		<span class="help-block">
			<strong>{{ $errors->first('name') }}</strong>
		</span>
		@endif

	</div>
	<div class="form-group {{ $errors->has('lastname') ? ' has-error' : '' }}">
		<label>Apellido</label>
		<input class="form-control" id="lastname" type="text" name="lastname" placeholder="Ingrese el Apellido" >

		@if ($errors->has('lastname'))
		<span class="help-block">
			<strong>{{ $errors->first('lastname') }}</strong>
		</span>
		@endif

	</div>
	<div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
		<label>Telefono</label>
		<input class="form-control" id="phone" type="number" name="phone" placeholder="Ingrese el Numero de Telefono">

		@if ($errors->has('phone'))
		<span class="help-block">
			<strong>{{ $errors->first('phone') }}</strong>
		</span>
		@endif

	</div>
	<div class="form-group {{ $errors->has('direction') ? ' has-error' : '' }}">
		<label>Direccion</label>
		<textarea id="direction" name="direction" class="form-control" rows="2" placeholder="Ingrese la Direccion"></textarea>

		@if ($errors->has('direction'))
		<span class="help-block">
			<strong>{{ $errors->first('direction') }}</strong>
		</span>
		@endif

	</div>