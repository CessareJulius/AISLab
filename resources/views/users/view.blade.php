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
        <li class="active">Datos {{ $user->username }}</li>
      </ol>
    </section>

    <section class="content">
    	<div class="row">
    		
    		@include('users.userData')

      	</div>
    </section>

@endsection