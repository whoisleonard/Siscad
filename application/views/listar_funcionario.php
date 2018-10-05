 <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                          <div class="row">
                       <div class="col-md-2">
        <a class="btn btn-default btn-block" href="<?= base_url()?>Usuarios/cadastro" > Novo Funcionario</a>
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
      
                     
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Listar de Funcionarios</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                         <th>ID</th>
 					<th>Nome</th>
                                        <th>CPF</th>
                                        <th>Email</th>
 					<th>Status</th>
 					<th>Nivel</th>
                                        <th>Função</th>
					<th>Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          
                            <?php foreach ($login as $login) : ?>
 				<tr>
 					<td><?= $login['cod_as_usuaria']?></td>
                                        <td><?= $login['nome']?></td>
                                        <td><?= $login['cpf']?></td>
                                        <td><?= $login['email']?></td>
                                        <td><?= $login['status']==1?'Ativo':'Inativo';?></td>
                                        <td><?= $login['nivel_acesso']==1?'Administrador':'Usuario'; ?></td>
                                        <td><?= $login['funcao']?></td>
                                        
                                        <td>
                                                 
                                                <a class="btn btn-success btn-xs" class="btn btn-group" href="">Visualizar</a>
                                                   
                                                <a class="btn btn-warning btn-xs" class="btn btn-group" href="<?= base_url('Usuarios/editar/'.$login['cod_as_usuaria']);?>">Editar</a>
                                      
                                                <a class="btn btn-danger btn-xs" class="btn btn-group" data-confirm href="<?= base_url('Usuarios/excluir/'.$login['cod_as_usuaria']);?>">Excluir </a>
                                          
                                            </td>
				</tr>
                                
                                <?php endforeach; ?>
              
                                        </tbody>
                                        
                                    </table>
                                </div>
                                <!-- Modal -->

                            </div>
                        </div>
                    </div>
                </div>
               <!-- Button trigger modal -->


