</div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 0.0.1
    </div>
    <strong>Copyright &copy; 2024 POS System.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../assets/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../assets/select2.full.min.js"></script>
<!-- DataTables -->
<script src="../assets/jquery.dataTables.js"></script>
<script src="../assets/dataTables.bootstrap4.js"></script>
<script src="../assets/tagsinput.js?v=1"></script>
<script src="../assets/sweetalert2@9.js"></script>
<script src="../assets/adminlte.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/demo.js"></script>
<!-- Initialize Select2 Elements -->
<script>
  $(document).ready(function () {
    $('.select2').select2({
      theme: 'bootstrap4'
    });
  });
</script>
<!-- Initialize DataTables -->
<script>
  $(function() {
    $('#example1').DataTable({
      "order": [
        [0, "desc"]
      ],
      "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
      ],
    });
  });
</script>

</body>
</html>
