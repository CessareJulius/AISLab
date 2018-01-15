<div class="col-md-6">
	<div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Datos Personales de {{ $user->people->name }}</h3>&nbsp;&nbsp;
            <a href="{{ route('users.index') }}" class="btn btn-info btn-flat"><i class="ion ion-tshirt">&nbsp;</i>Volver</a>

            <a href="{{ route('users.edit', $user->people->id ) }}" class="btn btn-warning btn-flat"><i class="ion ion-tshirt">&nbsp;</i>Editar</a>
        </div>
        <div class="box-body">
            <dl>
                <dt>Cedula</dt>
                <dd>&nbsp;&nbsp; {{ $user->people->dni }}</dd>
                <br>

                <dt>Nombre(s)</dt>
                <dd>&nbsp;&nbsp; {{ $user->people->name }}</dd>
                <br>

                <dt>Apellido(s)</dt>
                <dd>&nbsp;&nbsp; {{ $user->people->lastname }}</dd>
                <br>

                @empty($user->people->phone)
                @else
                    <dt>Telefono</dt>
                    <dd>&nbsp;&nbsp; {{ $user->people->phone }}</dd>
                    <br>
                @endempty
                
                @empty($user->people->direction)
                @else
                    <dt>Direccion</dt>
                    <dd>&nbsp;&nbsp; {{ $user->people->direction }}</dd>
                    <br>
                @endempty

                <dt>Tipo</dt>
                @if($user->people->type == 'admin')
                    <dd>&nbsp;&nbsp; Administrador</dd>
                    <br>
                @elseif($user->people->type == 'coord')
                    <dd>&nbsp;&nbsp; Coordinador</dd>
                    <br>
                @elseif($user->people->type == 'prof')
                    <dd>&nbsp;&nbsp; Profesor</dd>
                    <br>
                @else
                    <dd>&nbsp;&nbsp; Estudiante</dd>
                    <br>
                @endif

                <dt>Creado</dt>
                <dd>&nbsp;&nbsp; {{ App\UserDate::created($user->people->created_at) }}</dd>
                <br>

                <dt>Modificado</dt>
                <dd>&nbsp;&nbsp; {{ App\UserDate::updated($user->people->created_at) }}</dd>
            </dl>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Datos del {{ $user->position }}</h3>&nbsp;&nbsp;
            aqui va un boton
        </div>
        <div class="box-body">
            <dl>
                <dt>Cargo</dt>
                <dd>&nbsp;&nbsp;</dd>
                <br>

                <dt>Usuario</dt>
                <dd>&nbsp;&nbsp;</dd>
                <br>

                <dt>Habilitado</dt>
                <dd>&nbsp;&nbsp;</dd>
                <br>

                <dt>Creado</dt>
                <dd>&nbsp;&nbsp;</dd>
                <br>

                <dt>Modificado</dt>
                <dd>&nbsp;&nbsp;</dd>
            </dl>
        </div>
    </div>
</div>