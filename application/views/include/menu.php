<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Sistema Casa Rosa Mulher</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Perfil</a></li>                  
                </ul>
            </div>
        </div>
    </nav>

    <br><br><br>

    <div class="container-fluid">
        
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= base_url();?>">
                                <span data-feather="home"></span>
                               Tela Inicial <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url();?>Login">
                                <span data-feather="log-in"></span>
                             Login
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url();?>Lista_user">
                                <span data-feather="users"></span>
                             Funcionarios
                            </a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="<?= base_url();?>Cadastro_mulher">
                                <span data-feather="user"></span>
                              Cadastro da Mulher
                            </a>
                        </li>
                    </ul> 
                </div>
            </nav>
       
 