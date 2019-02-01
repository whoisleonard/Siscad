<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Esqueci a Senha</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/Login_v1/images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/Login_v1/vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/Login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/Login_v1/vendor/animate/animate.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/Login_v1/vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/Login_v1/vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/Login_v1/css/util.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/Login_v1/css/main.css">
        <!--===============================================================================================-->
    </head>
    <body>

        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="<?= base_url(); ?>assets/Login_v1/images/siscad.png" alt="IMG">
                    </div>

                    <form class="login100-form validate-form" method="post" action="<?= base_url(); ?>Login/envia_nova_senha">
                        <span class="login100-form-title">
                           Informe seu E-mail
                        </span>

                        <div class="wrap-input100 validate-input" data-validate = "Insira Um E-mail: ex@abc.com">
                            <input class="input100" type="email" name="email" placeholder="E-mail">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" >
                                Enviar
                            </button>
                        </div>
                         <div class="container-login100-form-btn">
                          <?php if ($this->session->flashdata('error') == TRUE): ?>
                                <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
                            <?php endif; ?>
                        
                         </div>
                        <div class="text-center p-t-136">
                          
                            <div class="text-center p-t-12">


                            </div>


                        </div>


                    </form>

                </div>

            </div>
        </div>




        <!--===============================================================================================-->	
        <script src="<?= base_url(); ?>assets/Login_v1/vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?= base_url(); ?>assets/Login_v1/vendor/bootstrap/js/popper.js"></script>
        <script src="<?= base_url(); ?>assets/Login_v1/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?= base_url(); ?>assets/Login_v1/vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?= base_url(); ?>assets/Login_v1/vendor/tilt/tilt.jquery.min.js"></script>
        <script >
            $('.js-tilt').tilt({
                scale: 1.1
            })
        </script>
        <!--===============================================================================================-->
        <script src="<?= base_url(); ?>assets/Login_v1/js/main.js"></script>

    </body>
</html>