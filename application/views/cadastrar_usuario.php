<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
          
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form class="form-horizontal" action="<?= base_url();?>usuarios/cadastrar" method="Post">
                                <div class="card-body">
                                    <h4 class="card-title">Cadastrar Funcionario</h4>
                                     <div class="row">
           <div class="col-md-10">
            <div class="form-group" >
               
                <label for="nome">Nome:</label>
                <input type="txt" class="form-control" id="nome" name="nome" placeholder="Informe o Nome.."required>

                </div>
            </div>
                <div class="col-md-2"> 
                    <label for="funcao">Função:</label> 
                    <select id="funcao" class="form-control"name="funcao" required>
                        <option disabled="" selected=""></option>
                         <option value="1">Assistente Social</option>
                          <option value="2">Advogada</option>
                            <option value="3">Psicologa</option>
                        
                        
                    </select>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="cpf">CPF:</label>
                        <input type="txt" class="form-control" id="cpf" name="cpf" placeholder="Informe seu CPF.."required>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="form-group">
                        <label for="endereco">Endereço:</label>
                        <input type="txt" class="form-control" id="endereco" name="endereco" placeholder="Informe seu Endereço.."required>
                    </div>
                </div>
                <div class="col-md-2"> 
                    <label for="nivel">Nivel:</label> 
                    <select id="nivel" class="form-control"name="nivel" required>
                        <option disabled="" selected=""></option>
                         <option value="1">Administrador</option>
                          <option value="2">Usuário</option>
                        
                        
                    </select>
                    
                </div>
                 
            </div>
            <div class="row">
                <div class="col-md-6">        
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Informe seu email.."required>

                    </div>
                </div>
                <div class="col-md-4">           
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="informe uma senha.."required>
                        
                    </div>
                </div>
               <div class="col-md-2"> 
                    <label for="status">Status:</label> 
                    <select id="status" class="form-control"name="status"required>
                        <option disabled="" selected=""></option>
                         <option value="1">Ativo</option>
                          <option value="2">Inativo</option>
                        
                        
                    </select>
                    
                </div>

            </div>
 
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-success">Cadastrar</button>
                                         <button type="reset" class="btn btn-default">Cancelar</button>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                  
                      

                    </div>
                 
                </div>
               
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            
             
</div>
<center>
<footer class="footer text-center">
               2018@ Team Siscad
            </footer>
</center>