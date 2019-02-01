<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-md-2">
                <a class="btn btn-default btn-block" href="<?= base_url() ?>Cadastro_mulher/cadastro" >Cadastrar Usuária</a>
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
            <div class="alert alert-danger alert-dismissible" id="myAlert">
                <a href="#" class="close">&times;</a>
                <strong> <?php echo $this->session->flashdata('error'); ?></strong> 
            </div>
        <?php endif; ?>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Lista de Usuárias</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Data e Hora</th>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>Telefone</th>
                                <th>Data Nascimento</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($mulheres as $woman) : ?>
                                <tr>
                                    <td><?= $woman['cod_usuaria'] ?></td>
                                     <td><?= date("d/m/Y - H:i", strtotime($woman['data_cadastro'])) ?></td>
                                    <td><?= $woman['nome'] ?></td>
                                    <td><?= $woman['cpf'] ?></td>
                                    <td><?= $woman['celular']; ?></td>
                                    <td><?= date("d/m/Y", strtotime($woman['data_nascimento'])) ?></td>


                                    <td>

                                        <a class="btn btn-info btn-xs" class="btn btn-group"  href="<?= base_url('Cadastro_mulher/vizualizar_cadastro/' . $woman['cod_usuaria']); ?>">Detalhar</a>

                                        <a class="btn btn-warning btn-xs" class="btn btn-group" href="<?= base_url('Cadastro_mulher/editar_cadastro_mulher/'. $woman['cod_usuaria']); ?>">Editar</a>

                                        <a class="btn btn-danger btn-xs" class="btn btn-group"  data-confirm href="<?= base_url('Cadastro_mulher/arquivar_usuaria/' . $woman['cod_usuaria']); ?>">Arquivar</a>

                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>

                    </table>
                </div>


            </div>
        </div>
    </div>
</div> <!-- fim da div wrapp-->


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#examplearquiva">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="examplearquiva" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



