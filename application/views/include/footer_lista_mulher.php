<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?= base_url(); ?>assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?= base_url(); ?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?= base_url(); ?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="<?= base_url(); ?>assets/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?= base_url(); ?>assets/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?= base_url(); ?>assets/dist/js/custom.min.js"></script>
<!-- this page js -->
<script src="<?= base_url(); ?>assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="<?= base_url(); ?>assets/extra-libs/multicheck/jquery.multicheck.js"></script>
<script src="<?= base_url(); ?>assets/extra-libs/DataTables/dataTablesMulher/datatables.min.js"></script>
<script src="<?= base_url(); ?>assets/excluirModal.js"></script>

  <!--Include these script files in the <head> or <body> tag-->
 <script src="<?= base_url();?>assets/lobibox/lib/jquery.1.11.min.js"></script>
  <script src="<?= base_url();?>assets/lobibox/dist/js/Lobibox.min.js"></script>

<script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $('#zero_config').DataTable();
</script>
 
 <script>
$(document).ready(function(){
    $(".close").click(function(){
        $("#myAlert").alert("close");
    });
});
</script>
<footer class="footer text-center">
    2018 @ Team Siscad Jocicleide Kersse Leonardo
</footer>

</body>

</html>