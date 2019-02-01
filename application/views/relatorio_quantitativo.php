   <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
             
          
                
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            
     
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                       <?php if ($this->session->flashdata('error') == TRUE): ?>
             <div class="alert alert-success-danger">&times;</a>
                <strong> <?php echo $this->session->flashdata('error'); ?></strong>
            </div>
        <?php endif; ?>
                <!-- ============================================================== -->
                   <div class="row">
            <div class="col-md-2">
               
                <a class="btn btn-success" href="<?= base_url('Relatorios/Pdf_quantitativo')?>" target="_blank">Gerar PDF</a>
            </div>

        </div> 
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                 <h2 class="card-title m-b-0"><p class="text-center"> <b>Relátorio Quantitativo</b></p></h2>
                                 <br><br>
                                   <form action="<?= base_url(); ?>Cadastro_mulher/" method="post">
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
                            
                            
                            </div>
                             <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0">Quantitativo Por Idade:</h5>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr class="center">

                            <th class="center"><b>Idade</b></th>
                            <th class="center"><b>Quantidade</b></th>

                        </tr>
                    </thead>
                    <tbody class="customtable">
                         <tr>

                                <td>Menor de 18</td>
                                <td><?= $menor18 ?></td>

                            </tr>
                            <tr>

                                <td>18 a 25</td>
                                <td><?= $maior18 ?></td>

                            </tr>
                            <tr>

                                <td>26 a 40</td>
                                <td><?= $maior26 ?></td>

                            </tr>
                            <tr>

                                <td>Maior de 40</td>
                                <td><?= $maior40 ?></td>

                            </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0">Quantitativo Por Escolaridade:</h5>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr class="center">

                            <th scope="col"><b>Escolaridade</b></th>
                            <th scope="col"><b>Quantidade</b></th>

                        </tr>
                    </thead>
                    <tbody class="customtable">
                         <tr>

                                <td>Não Alfabetizado</td>
                                <td><?= $anafal ?></td>

                            </tr>
                            <tr>

                                <td>Fundamental Incompleto</td>
                                <td><?= $fundi ?></td>

                            </tr>
                            <tr>
                                <td>Fundamental Completo</td>
                                <td><?= $fundc ?></td>
                            </tr>
                            <tr>
                                <td>Médio Incompleto </td>
                                <td><?= $medin ?></td>
                            </tr>
                            <tr>
                                <td>Médio Completo  </td>
                                <td><?= $medic ?></td>
                            </tr>
                            <tr>
                                <td>Superior </td>
                                <td><?= $supic ?></td>
                            </tr>
                            <tr>
                                <td>Não Informado </td>
                                <td><?= $ni ?></td>
                            </tr>                 
                            <!-- outra TAB -->
                    </tbody>
                </table>
            </div>
   </div>
                        </div>
                    </div>
                </div>
            </div>
   </div>