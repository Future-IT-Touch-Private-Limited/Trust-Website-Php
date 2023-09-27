

<!-- jQuery -->
		<script src="<?php echo BASE_URL ?>/assets/js/jquery-3.5.1.min.js"></script>	
		<!-- Bootstrap Core JS -->
		<script src="<?php echo BASE_URL ?>/assets/js/popper.min.js"></script>
		<script src="<?php echo BASE_URL ?>/assets/js/bootstrap.min.js"></script>		
		<!-- Feather Icon JS -->
		<script src="<?php echo BASE_URL ?>/assets/js/feather.min.js"></script>	
		<!-- Slimscroll JS -->
		<script src="<?php echo BASE_URL ?>/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		<!-- Map JS -->
				<!-- Form Validation JS -->
        <script src="<?php echo BASE_URL ?>/assets/js/form-validation.js"></script>
		<!-- Mask JS -->
		<script src="<?php echo BASE_URL ?>/assets/js/jquery.maskedinput.min.js"></script>
        <script src="<?php echo BASE_URL ?>/assets/js/mask.js"></script>
		<!-- Datatables JS -->
		<script src="<?php echo BASE_URL ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="<?php echo BASE_URL ?>/assets/plugins/datatables/datatables.min.js"></script>
		<!-- Select2 JS -->
		<script src="<?php echo BASE_URL ?>/assets/plugins/select2/js/select2.min.js"></script>
		<!-- Datepicker Core JS -->
		<script src="<?php echo BASE_URL ?>/assets/plugins/moment/moment.min.js"></script>
		<script src="<?php echo BASE_URL ?>/assets/js/bootstrap-datetimepicker.min.js"></script>
		<!-- Full Calendar JS -->
		<!-- Chart JS -->
				<!-- Custom JS -->
		<script src="<?php echo BASE_URL ?>/assets/js/script.js"></script>

		 <!-- date link table -->
		<script src='https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js'></script>
		 <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
		<script src="src/administer/export.js"></script>
		  </body>	
		
</html>

<?php unset($_SESSION['msg']) ?>
<script>
  var table2excel = new Table2Excel();

      document.getElementById('export').addEventListener('click', function() {
        table2excel.export(document.querySelectorAll('table'));
      });
</script>

<?php unset($_SESSION['massage']); ?>



   <script>
    $(document).ready(function() {
     $('textarea').summernote({
  height: 250, 
        });
    });
  </script>