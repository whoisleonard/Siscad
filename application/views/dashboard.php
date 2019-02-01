
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Tela Inicial</h4>
                <div class="ml-auto text-right">

                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">

        <!-- =========================================================================================================== --> 

        <div class="row">

            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <a href="<?= base_url(); ?>Usuarios/cadastro"> <div class="card card-hover">
                        <div class="box bg-cyan text-center">
                            <h1 class="font-light text-white"><i class="fa fa-user m-b-5"></i></h1>
                            <h6 class="text-white">Cadastrar Funcionário</h6>
                        </div>
                    </div></a>
            </div>


            <!-- =========================================================================================================== --> 
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <a href="<?= base_url(); ?>Cadastro_mulher/cadastro">  <div class="card card-hover">
                        <div class="box bg-warning text-center">
                            <h1 class="font-light text-white"><i class="fa fa-user m-b-5"></i></h1>
                            <h6 class="text-white">Cadastrar Usuária</h6>
                        </div>
                    </div></a>
            </div>
            <!-- =========================================================================================================== --> 
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <a href="<?= base_url(); ?>Usuarios">  <div class="card card-hover">
                        <div class="box bg-danger text-center">
                            <h1 class="font-light text-white"><i class=" fas fa-address-book"></i></h1>
                            <h6 class="text-white">Listar Funcionário</h6>
                        </div>
                    </div></a>
            </div>

            <!-- =========================================================================================================== --> 

            <div class="col-md-6 col-lg-2 col-xlg-3">
                <a href="<?= base_url(); ?>Cadastro_mulher/listar_usuarias"><div class="card card-hover">
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white"><i class=" fas fa-address-book"></i></h1>
                            <h6 class="text-white" > Listar Usuária</h6>
                        </div>
                    </div></a>
            </div>
            
             <div class="col-md-6 col-lg-2 col-xlg-3">
                <a href="" data-toggle="modal" data-target="#exampleModal" ><div class="card card-hover">
                        <div class="box bg-success text-center">
                            <h1 class="font-light text-white"><i class="ti-search"></i></h1>
                            <h6 class="text-white" > Pesquisar Usuária</h6>
                        </div>
                    </div></a>
            </div>
            <!-- Column -->

        </div> <!-- fim atalhos widgets-->
        <!-- =========================================================================================================== --> 
      
        <br> <br> <br>

        <div class="row">
            
             <!-- =========================================================================================================== -->               
                            <div class="col-md-2">
                                <div class=" card-hover"
                                     <div class="col-md-6 col-lg-4 col-xlg-4">
                                        <div class="bg-cyan p-10 text-white text-center">
                                            <i class=" far fa-file font-22 text-white"></i>

                                            <h5 class="m-b-0 m-t-5 text-pink"><?php echo $curso ?>  </h5>
                                            <h7 class="m-b-0 m-t-3 text-white"> <b>Curso.</b></h7> 
                                        </div>
                                    </div>
                                </div>
                           
                            <!-- =========================================================================================================== --> 

            <div class="col-md-3">
                <div class=" card-hover"
                     <div class="col-md-6 col-lg-4 col-xlg-4">
                        <div class="bg-warning p-10 text-white text-center">
                            <i class=" far fa-file font-22 text-white"></i>

                            <h5 class="m-b-0 m-t-5 text-pink"> <?php echo $contando ?> </h5>
                            <h7 class="m-b-0 m-t-3 text-white"> <b>Usuárias Cadastradas.</b></h7> 
                        </div>
                    </div>
                </div>

                <!-- =========================================================================================================== -->               
                <div class="col-md-2">
                    <div class=" card-hover"
                         <div class="col-md-6 col-lg-4 col-xlg-4">
                            <div class="bg-success p-10 text-white text-center">
                                <i class=" far fa-file font-22 text-white"></i>

                                <h5 class="m-b-0 m-t-5 text-pink"><?php echo $juridico ?>  </h5>
                                <h7 class="m-b-0 m-t-3 text-white"> <b>Atendimento Juridico.</b></h7> 
                            </div>
                        </div>
                    </div>
                    <!-- =========================================================================================================== --> 
                    <div class="col-md-3">
                        <div class=" card-hover"
                             <div class="col-md-6 col-lg-4 col-xlg-4">
                                <div class="bg-info p-10 text-white text-center">
                                    <i class=" far fa-file font-22 text-white"></i>

                                    <h5 class="m-b-0 m-t-5 text-pink"><?php echo $psicologico ?>  </h5>
                                    <h7 class="m-b-0 m-t-3 text-white"> <b>Atendimento Psicologico.</b></h7> 
                                </div>
                            </div>
                        </div>
                        <!-- =========================================================================================================== -->            
                        <div class="col-md-2">
                            <div class=" card-hover"
                                 <div class="col-md-6 col-lg-4 col-xlg-4">
                                    <div class="bg-danger p-10 text-white text-center">
                                        <i class=" far fa-file font-22 text-white"></i>

                                        <h5 class="m-b-0 m-t-5 text-pink"><?php echo $social ?>  </h5>
                                        <h7 class="m-b-0 m-t-3 text-white"> <b>Atendimento Social.</b></h7> 
                                    </div>
                                </div>
                            </div>
                           

                            </div><!-- fim da row-->
                        </div> <!-- fim do container-->

                    </div><!-- fim do wrapper -->
                    
                </div> <!--main wrapp -->
                
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
       <form action="<?= base_url(); ?>Cadastro_mulher/pesquisar_usuaria" method="post">
    <div class="modal-content">
        
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pesquisar Cadastro.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
         
          <div class="form-group">
            <label for="namecp" class="col-form-label">Pesquisar Usuária:</label>
            <input type="text" class="form-control" id="namecp" name="namecp" placeholder="Informe Nome da Usuária..">
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