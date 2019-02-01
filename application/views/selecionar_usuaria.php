<div class="page-wrapper">

    <div class="container-fluid">
        <?php if ($this->session->flashdata('error') == TRUE): ?>
            <div class="alert alert-danger alert-dismissible" id="myAlert">
                <a href="#" class="close">&times;</a>
                <strong> <?php echo $this->session->flashdata('error'); ?></strong> 
            </div>
        <?php endif; ?>
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
 <!-- <?php echo var_dump($usuarias) ?> -->
                    <div class="card">
                        <div class="card-body">
                            <center> <h4 class="card-title m-b-0"><b>Lista de Usuárias Interessadas em Curso</b></h4></center>
                        </div>
                        <br><br>
                         <form action="<?= base_url(); ?>Cadastro_mulher/selecionar_usuaria" method="post">
                             <center>    <div class="col-12 form-group row">
                            <label class="m-t-5"><h5>Data Inicial:</h5></label> 
                            <div class="input-group col-md-3">                                                           
                                <input type="date" class="form-control col-md-7" name="dataini" id="dataini" required> 
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                </div>   
                            </div> 
                            <label class="m-t-5"><h5>Data Final:</h5></label> 
                            <div class="input-group col-md-3">
                                <input type="date" class="form-control col-md-7" name="datafim" id="datafim" required> 
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                </div>   
                            </div> 
                            <div class="input-group col-md-4">
                                <button type="submit" class=" btn btn-info col-md-5" >Filtrar</button>                                             
                            </div> 
                                 </div> </center>
                        </form>
                            
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>
                                            <label class="customcheckbox m-b-20">
                                                <input type="checkbox" id="mainCheckbox" />
                                                <span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Data do Cadastro</th>
                                        <th scope="col">Motivo da Procura</th>
                                        <th scope="col">Qual Curso</th>
                                         <th scope="col">Disponibilidade De Horário</th>
                                        <th scope="col">Telefone</th>

                                    </tr>
                                </thead>

                                <tbody class="customtable">
                                    <?php foreach ($usuarias as $value) : ?>
                                        
                                   
                                    <tr>
                                        <th>
                                            <label class="customcheckbox">
                                                <input type="checkbox" class="listCheckbox" />
                                                <span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><?= $value['nome']  ?></td>
                                        <td><?= date("d/m/Y", strtotime($value['data_cadastro']))?></td> 
                                        <td><?= $value['descricao_motivo']  ?></td>
                                           <td><?= $value['qual_curso']  ?></td>
                                              <td><?= $value['disponibilidade']  ?></td>
                                        <td><?= $value['celular']  ?></td>




                                    </tr>
                                  <?php endforeach  ?>
                                </tbody>
                            </table>

                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>


</div>

<!-- End PAge Content -->

