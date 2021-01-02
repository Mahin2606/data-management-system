<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- Data Tables -->
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script>
	$(document).ready(function() {
	    $('#allRecords').DataTable( {
	    	"lengthMenu": [ 10, 31, 70, 100 ]
	    } );
	} );
</script>
<!-- Toastr JS -->
<script src="plugins/toastr/toastr.min.js"></script>
<script>
  toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": false,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "1500",
      "extendedTimeOut": "1500",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
   }
</script>
<script type="text/javascript">
  <?php
    if (isset($_SESSION['message']) && $_SESSION['message'] != '') {
      if ($_SESSION['message'] == 'New Data Records Added Successfully!') { ?>
        toastr.success('<?php echo $_SESSION['message']; ?>');
      <?php }
      else if ($_SESSION['message'] == 'Data Records Deleted Successfully!') { ?>
        toastr.error('<?php echo $_SESSION['message']; ?>');
      <?php }
      else if ($_SESSION['message'] == 'Data Records Updated Successfully!') { ?>
        toastr.info('<?php echo $_SESSION['message']; ?>');
      <?php }
      else if ($_SESSION['message'] == 'New User Registered Successfully!') { ?>
        toastr.success('<?php echo $_SESSION['message']; ?>');
      <?php }
      else if ($_SESSION['message'] == 'User Deleted Successfully!') { ?>
        toastr.error('<?php echo $_SESSION['message']; ?>');
      <?php }
      else if ($_SESSION['message'] == 'User Information Updated Successfully!') { ?>
        toastr.info('<?php echo $_SESSION['message']; ?>');
      <?php }
      else if ($_SESSION['message'] == 'Required Data Input Missing!') { ?>
        toastr.warning('<?php echo $_SESSION['message']; ?>');
      <?php }
    }
  ?>
</script>
<?php
  unset($_SESSION['message']);
?>

<!-- Custom JS Script -->
<script src="dist/js/script.js"></script>

<?php
	ob_end_flush();
?>
</body>
</html>