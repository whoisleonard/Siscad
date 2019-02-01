<div class="page-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">       
                    <div class="card-body">
                        <?php if ($this->session->flashdata('error') == TRUE): ?>
                            <div class="alert alert-danger alert-dismissible" id="myAlert">
                <a href="#" class="close">&times;</a>
                <strong> <?php echo $this->session->flashdata('error'); ?></strong> 
            </div>
                        <?php endif; ?> 

                       <?php foreach ($mulheres as $woman) : ?>
                            <h5 class="card-title m-b-0">Usuária: <?= $woman['nome'] ?></h5>
                        </div>
                        <table class="table">
                            <thead>
                                  <tr>
                                <th>ID</th>
                                <th>Data e Hora do Cadastro</th>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>Telefone</th>
                                <th>Data Nascimento</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>

                          
                                <tr>
                                    <td><?= $woman['cod_usuaria'] ?></td>
                                     <td><?= date("d/m/Y - H:i", strtotime($woman['data_cadastro'])) ?></td>
                                    <td><?= $woman['nome'] ?></td>
                                    <td><?= $woman['cpf'] ?></td>
                                    <td><?= $woman['celular']; ?></td>
                                    <td><?= date("d/m/Y", strtotime($woman['data_nascimento'])) ?></td>


                                    <td>

                                        <a class="btn btn-info btn-xs" class="btn btn-group"  href="<?= base_url('Cadastro_mulher/vizualizar_cadastro/' . $woman['cod_usuaria']); ?>">Detalhar</a>

                                        <a class="btn btn-warning btn-xs" class="btn btn-group" href="<?= base_url('Cadastro_mulher/editar_usuaria/' . $woman['cod_usuaria']); ?>">Editar</a>

                                        <a class="btn btn-danger btn-xs" class="btn btn-group" data-confirm href="<?= base_url('Cadastro_mulher/excluir_usuaria/' . $woman['cod_usuaria']); ?>">Excluir </a>

                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>


                    </table>
                </div>

            </div>
        </div>
    </div>
</div>













