<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-md-2">
                <a class="btn btn-default btn-block" href="<?= base_url() ?>Usuarios/cadastro" > Novo Funcionário</a>
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

        <?php if ($this->session->flashdata('sucess') == TRUE): ?>
             <div class="alert alert-success alert-dismissible" id="myAlert">
                <a href="#" class="close">&times;</a>
                <strong> <?php echo $this->session->flashdata('sucess'); ?></strong>
            </div>
        <?php endif; ?>
            

        <?php if ($this->session->flashdata('error') == TRUE): ?>
             <div class="alert alert-success-danger">&times;</a>
                <strong> <?php echo $this->session->flashdata('error'); ?></strong>
            </div>
        <?php endif; ?>
            
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Listar de Funcionários</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Função</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($login as $login) : ?>
                                <tr>
                                    <td><?= $login['cod_login'] ?></td>
                                    <td><?= $login['nome'] ?></td>
                                    <td><?= $login['cpf'] ?></td>
                                    <td><?= $login['email'] ?></td>
                                    <td><?= $login['status'] == 1 ? 'Ativo' : 'Inativo'; ?></td>           
                                    <td><?= $login['funcao'] ?></td>

                                    <td>

                                        <a class="btn btn-info btn-xs" class="btn btn-group" data-toggle="modal" data-target="#mymodal<?= $login['cod_login'] ?>" href="">Detalhar</a>

                                        <a class="btn btn-warning btn-xs" class="btn btn-group" href="<?= base_url('Usuarios/editar/' . $login['cod_login']); ?>">Editar</a>

                                        <a class="btn btn-danger btn-xs" class="btn btn-group" data-confirm href="<?= base_url('Usuarios/excluir/' . $login['cod_login']); ?>">Excluir </a>

                                    </td>
                                </tr>
                                <!-- inicio Modal -->
                            <div class="modal fade bd-example-modal-lg"  id="mymodal<?= $login['cod_login'] ?>" tabindex="-1" role="dialog" data-toggle="modal" aria-labelledby="exampleModalLabel" aria-hidden="true">>
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class=" modal-header bg-info text-white">
                                            <h5 class="modal-title text-center" id="exampleModalLabel">Funcionario: <?= $login['nome'] ?> </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <p>ID: <?= $login['cod_login'] ?></p>  
                                                            <p>Nome: <?= $login['nome'] ?></p>
                                                            <p>CPF: <?= $login['cpf'] ?></p>
                                                            <p>E-mail: <?= $login['email'] ?></p>
                                                            <p>Status: <?= $login['status'] == 1 ? 'Ativo' : 'Inativo'; ?></p> 
                                                            <p>Função: <?= $login['funcao'] ?></p>


                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- fim Modal -->

                        <?php endforeach; ?>

                        </tbody>

                    </table>
                </div>


            </div>
        </div>
                
       
</div> <!-- fim da div wrapp-->
</div>



