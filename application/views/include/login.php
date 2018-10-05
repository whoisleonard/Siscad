<!DOCTYPE html>

<html lang='pt-br'>
    
    <head>
      <title>Login-Casa Rosa Mulher</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Tela de Login">
      <meta name="author" content="Leonardo Silva">
      <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url();?>assets/teste/icon.svg">
      <link href="<?= base_url();?>assets/teste/estilo.css" rel="stylesheet" id="bootstrap-css">
      <link href="<?= base_url();?>assets/teste/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> 
      <!--<link href="<?= base_url();?>assets/teste/coldepen.css" rel="stylesheet" id="bootstrap-css"> -->
      <script src="<?= base_url();?>assets/teste/bootstrap.min.js"></script>
       <script src="<?= base_url();?>assets/teste/jquery.min.js"></script>

    </head>
    <body id="LoginForm">
<div class="wrapper fadeInDown">
  <div id="formContent">
                                

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="<?= base_url();?>assets/teste/icon.svg" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form method="post" action="<?= base_url();?>Login/autenticar">
        <input type="email" id="login" class="fadeIn second" name="email" placeholder="Email" required>
        <input type="password" id="password" class="fadeIn third" name="senha" placeholder="Senha" required>
      <input type="submit" class="fadeIn fourth" value="Login">
    </form>

  
  

  </div>
    
    <?php if($this->session->flashdata("danger")): ?>
                <p><?php $this->session->flashdata("danger") ?></p>
                <?php endif; ?>
</div>
        


</body>
</html>