<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>teste</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?php echo URL_BASE?>assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo URL_BASE?>assets/dist/css/adminlte.min.css"> 
 
  <link rel="stylesheet" href="<?php echo URL_BASE?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo URL_BASE?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo URL_BASE?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<?php include_once("top.php"); ?>	
  <?php include_once("menu.php"); ?>	
  <?php $this->load($view, $viewData); ?>	
  <?php include_once("rodape.php"); ?>	  
  <aside class="control-sidebar control-sidebar-dark">
  </aside> 
</div>
<script src="<?php echo URL_BASE?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo URL_BASE?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo URL_BASE?>assets/dist/js/adminlte.min.js"></script>

<script src="<?php echo URL_BASE?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo URL_BASE?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo URL_BASE?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo URL_BASE?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo URL_BASE?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo URL_BASE?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo URL_BASE?>assets/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo URL_BASE?>assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo URL_BASE?>assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo URL_BASE?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo URL_BASE?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo URL_BASE?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
