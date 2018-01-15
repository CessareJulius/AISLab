<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ request()->user()->username }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><center>MENU</center></li>
        <li class="{{ Request::is('home') ? 'active' : '' }}">
          <a href="{{ route('home') }}">
            <i class="fa fa-home text-aqua"></i> <span>Inicio</span>
          </a>
        </li>
        <li class="treeview {{ Request::is('users') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-users text-aqua"></i>
            <span>Usuarios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('users') ? 'active' : '' }}">
              <a href="{{ route('users.index') }}"><i class="fa fa-navicon"></i>Ver Todos</a>
            </li>
            <li class="{{ Request::is('users/create') ? 'active' : '' }}">
              <a href="{{ route('users.create') }}"><i class="fa fa-user-plus"></i>Agregar Nuevo</a>
            </li>
          </ul>
        </li>
        <li class="treeview {{ Request::is('coord') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-user-secret text-aqua"></i>
            <span>Coordinador</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('coord') ? 'active' : '' }}">
              <a href="{{ route('people.type', 'coord') }}"><i class="fa fa-navicon"></i>Ver</a>
            </li>
            <li class="{{ Request::is('create') ? 'active' : '' }}">
              <a href="{{ route('people.create') }}"><i class="fa fa-user-plus"></i>Crear Nuevo</a>
            </li>
          </ul>
        </li>
        <li class="treeview {{ Request::is('prof') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-user text-aqua"></i>
            <span>Profesores</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('prof') ? 'active' : '' }}">
              <a href="{{ route('people.type', 'prof') }}"><i class="fa fa-navicon"></i>Ver Todos</a>
            </li>
            <li class="{{ Request::is('create') ? 'active' : '' }}">
              <a href="{{ route('users.create') }}"><i class="fa fa-user-plus"></i>Agregar Nuevo</a>
            </li>
          </ul>
        </li>
        <li class="treeview {{ Request::is('est') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-male text-aqua"></i>
            <span>Estudiantes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('est') ? 'active' : '' }}">
              <a href="{{ route('people.type', 'est') }}"><i class="fa fa-navicon"></i>Ver Todos</a>
            </li>
            <li class="{{ Request::is('create') ? 'active' : '' }}">
              <a href="{{ route('people.create') }}"><i class="fa fa-user-plus"></i>Agregar Nuevo</a>
            </li>
          </ul>
        </li>
        <li class="header"><center>OPCIONES</center></li>
        <li>
          <a href="{{ route('users.profile', request()->user()->id ) }}">
            <i class="fa fa-user text-aqua"></i> <span>Perfil</span>
          </a>
        </li>
        <li><a href="#"><i class="fa fa-gears text-yellow"></i> <span>Configuraciones</span></a></li>
        <li>
          <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
            <i class="fa fa-power-off text-red"></i> <span>Salir</span>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>