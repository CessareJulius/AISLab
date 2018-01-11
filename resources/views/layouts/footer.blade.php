  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.2.0
    </div>
    <strong>{{ config('app.name') }} | Copyright &copy; 2017-2018 <a href="https://www.servitec.com">Servitec</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  @include('layouts.control')
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('template/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('template/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('template/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('template/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('template/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template/dist/js/adminlte.min.js') }}"></script>

<script src="{{ asset('template/dist/js/demo.js') }}"></script>

<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>

</body>
</html>