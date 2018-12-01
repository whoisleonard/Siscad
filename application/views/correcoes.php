<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                     <a class="navbar-brand" href="<?= base_url(); ?>Dashboard/Tela">
                        <!-- Logo icon -->
                         <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                      <img src="<?= base_url(); ?>assets/images/siscad12.png" width="185" height="65" alt="homepage" class="light-logo" /> 

                       </b>
                     <!--   <span class="logo-text"> 
                           
                     <img src="<?= base_url(); ?>assets/images/siscad.png" width="209" height="73" alt="homepage" class="light-logo" /> 

                            
                       </span> --> 



                     </a>

                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-none d-md-block">Opções <i class="fa fa-angle-down"></i></span>
                                <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>   
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?= base_url(); ?>Cadastro_mulher/cadastro">Cadastrar Usuária</a>
                                <a class="dropdown-item" href="<?= base_url(); ?>Usuarios/cadastro">Cadastrar Funcionário</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url();?>Usuarios">Listar Funcionários</a>
                                 <a class="dropdown-item" href="<?= base_url();?>Cadastro_mulher/listar_usuarias">Listar Usuárias</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"  data-toggle="modal" data-target="#exampleModal" href="javascript:void(0)"><i class="ti-search"> Pesquisar</i></a>
                           <!-- <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Buscar"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form> -->
                        </li>
                        
                        
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                      
                        <li class="nav-item dropdown">
                            <!--<a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url(); ?>assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <div class="dropdown-divider"></div> -->
                                <a class="nav-item-item" href="<?= base_url(); ?>Login/logout"><i class="fa fa-power-off m-r-5 m-l-5"></i> Sair</a>

                           <!-- </div> -->
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url(); ?>Dashboard/Tela" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Tela Inicial</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Atendimento</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?= base_url(); ?>Cadastro_mulher/Cadastro" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Cadastro Da Usuária</span></a></li>
                                

                            </ul>
                        </li>
                        
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Curso</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                  <li class="sidebar-item"><a href="<?= base_url(); ?>Cadastro_mulher/filtrar_user" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Selecionar Usuária</span></a></li>

                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Funcionário</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?= base_url(); ?>Usuarios/cadastro" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Cadastro de Funcionários </span></a></li>
                            </ul>
                        </li>




                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Relatórios</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="" data-toggle="modal" data-target="#exampleModalinforma"  class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Informativo </span></a></li>
                              <li class="sidebar-item"><a href="" data-toggle="modal" data-target="#exampleModalCenter" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Social </span></a></li> 
                                 <li class="sidebar-item"><a href="<?= base_url(); ?>Relatorio_quanty/relatorio_county" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Quantitativo </span></a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
    </div>     <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
       <form action="<?= base_url(); ?>Usuarios/pesquisar" method="post">
    <div class="modal-content">
        
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pesquisar Cadastro.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
         
          <div class="form-group">
            <label for="namecp" class="col-form-label">Pesquisar Funcionário:</label>
            <input type="text" class="form-control" id="namecp" name="namecp" placeholder="Informe Nome ou CPF..">
          </div>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Pesquisar</button>
      </div>
              
    </div>
   </form>
  </div>
</div>
        
        
 <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form class="form-control" action="<?= base_url() ?>Relatorios/buscar_usuaria" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Gerar Relatório Social</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="form-group col-md-10">
                            <label for="namecp">Informe o Nome  da Usuária:</label>
                            <input type="text" class="form-control" id="namecp" name="namecpf" required>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Gerar</button>
                </div>
            </div>
        </form>
    </div>
</div>
 
  <!-- Modal -->
<div class="modal fade" id="exampleModalinforma" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form class="form-control" action="<?= base_url() ?>Relatorios/relatorio_informativo" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Gerar Relatório Informativo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="form-group col-md-10">
                            <label for="namecp">Informe o Nome  da Usuária:</label>
                            <input type="text" class="form-control" id="namecp" name="namecpf" required>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Gerar</button>
                </div>
            </div>
        </form>
    </div>
</div>