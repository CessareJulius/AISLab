@include('layouts.head')

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

    @include('layouts.nav')
    
    @include('layouts.menu')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Main content -->
      @yield('content')
      <!-- /.content -->
    </div>

<!-- EL </div> QUE CIERRA TODO ESTA EN EL ARCHIVO FOOTER -->

@include('layouts.footer')
