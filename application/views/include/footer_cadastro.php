    <script src="<?= base_url();?>assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url();?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url();?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url();?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?= base_url();?>assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url();?>assets/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url();?>assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url();?>assets/dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="<?= base_url();?>assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="<?= base_url();?>assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
    <script>
        // Basic Example with form
    var form = $("#example-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) { element.before(error); },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });
     form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function(event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function(event, currentIndex) {
            alert("Submitted!");
        }
    });


    </script>
    <footer class="footer text-center">
               2018@ Team Siscad
            </footer>
</body>

</html>