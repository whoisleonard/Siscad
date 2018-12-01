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

                        <?php foreach ($usuario as $user) : ?>
                            <h5 class="card-title m-b-0">Funcionario: <?= $user->nome ?></h5>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>CPF</th>
                                    <th>Endereço</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Nivel</th>
                                    <th>Função</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>


                                <tr>
                                    <td><?= $user->cod_login ?></td>
                                    <td><?= $user->nome ?></td>
                                    <td><?= $user->cpf ?></td>
                                    <td><?= $user->data_nascimento ?></td>
                                    <td><?= $user->email ?></td>
                                    <td><?= $user->status; ?></td>                 
                                    <td><?= $user->funcao ?></td>

                                    <td>

                                        <a class="btn btn-info btn-xs" class="btn btn-group"  href="<?= base_url('Dashboard/tela'); ?>">Voltar</a>

                                        <a class="btn btn-warning btn-xs" class="btn btn-group" href="<?= base_url('Usuarios/editar/' . $user->cod_login); ?>">Editar</a>

                                        <a class="btn btn-danger btn-xs" class="btn btn-group" data-confirm href="<?= base_url('Usuarios/excluir/' . $user->cod_login); ?>">Excluir </a>

                                    </td>

                                <?php endforeach; ?>

                            </tr>

                        </tbody>


                    </table>
                </div>

            </div>
        </div>
    </div>
</div>













