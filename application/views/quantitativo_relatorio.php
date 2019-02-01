<div class="page-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-2"> 
                  
                <a class="btn btn-success" href="<?= base_url('Relatorios/pdf_quantitativo') ?>" target="_blank">Gerar PDF</a>
            </div>
 
        </div> <!-- fim da linha  -->
           <div class="card">
            <div class="card-body">
                <h3 class="card-title text-center">Relatório</h3>
                <br><br>
                  <form action="<?= base_url(); ?>Cadastro_mulher/relatorio_county" method="post">
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



        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0">Quantitativo Por Renda:</h5>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>

                            <th scope="col"><b>Renda</b></th>
                            <th scope="col"><b>Quantidade</b></th>

                        </tr>
                    </thead>
                    <tbody class="customtable">
                        <tr>
                                <td>Menos De 01 Salário Mínimo</td>
                                <td><?= $rm1 ?></td>
                            </tr>
                            <tr>
                               <td>1 Salário Mínimo</td>
                               <td><?= $rda1 ?></td>
                            </tr>
                            <tr>
                                <td>De 01 A 02 Salário Mínimos</td>
                                <td><?= $rda1a2 ?></td>
                            </tr>
                            <tr>
                                <td>02 A 03 Salário Mínimos </td>
                                <td><?= $rda2a3 ?></td>
                            </tr>
                            <tr>
                                <td>03 A 04 Salário Mínimos  </td>
                                <td><?= $rda3a4 ?></td>
                            </tr>
                            <tr>
                                <td>Mais de 4 Salário Mínimos  </td>
                                <td><?= $rda4 ?></td>
                            </tr>
                            <tr>
                                <td>Sem Renda  </td>
                                <td><?= $rdasem ?></td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>


        
        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0">Quantitativo Por Tipos de Serviços:</h5>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>

                            <th scope="col"><b>Tipos de Serviços</b></th>
                            <th scope="col"><b>Quantidade</b></th>

                        </tr>
                    </thead>
                    <tbody class="customtable">
                       <tr>
                                <td>Cursos Proficionalizantes</td>
                                <td><?= $curso ?></td>
                            </tr>
                            <tr>
                                <td>Atendimento Social</td>
                                <td><?= $social ?></td>
                            </tr>
                            <tr>
                                <td>Atendimento Psicologico</td>
                                <td><?= $psicologico ?></td>
                            </tr>
                            <tr>
                                <td>Atendimento Juridico </td>
                                <td><?= $juridico ?></td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>



        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0">Quantitativo Por Tipos de Violência:</h5>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>

                            <th scope="col"><b>Tipos de Violência</b></th>
                            <th scope="col"><b>Quantidade</b></th>

                        </tr>
                    </thead>
                    <tbody class="customtable">
                        <tr>
                                <td> Violência Psicologica</td>
                                <td><?= $psico ?></td>
                            </tr>
                            <tr>
                                <td>Violência Fisica</td>
                                <td><?= $fisica ?></td>
                            </tr>
                            <tr>
                               <td>Violência Sexual</td>
                                <td><?= $sexual ?></td>
                            </tr>
                            <tr>
                                <td>Violência Moral</td>
                                <td><?= $moral ?></td>
                            </tr>
                            <tr>
                                <td>Violência Econômica</td>
                                <td><?= $econo ?></td>
                            </tr>

                    </tbody>
                </table>
            </div>
        </div>


        
        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0">Quantitativo Por Religião:</h5>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>

                            <th scope="col"><b>Religião</b></th>
                            <th scope="col"><b>Quantidade</b></th>

                        </tr>
                    </thead>
                    <tbody class="customtable">
                        <tr>
                                <td scope="">Católica</td>
                                <td><?= $catolica ?></td>
                            </tr>
                            <tr>
                                <td>Evangélica</td>
                                <td><?= $evangel ?></td>
                            </tr>
                            <tr>
                                <td>Espírita</td>
                                <td><?= $espirita ?></td>
                            </tr>
                            <tr>
                                <td>Matriz Africana</td>
                                <td><?= $matriz ?></td>
                            </tr>
                            <tr>
                                <td>Daimista</td>
                                <td><?= $daimista ?></td>
                            </tr>
                            <tr>
                                <td>Sem Religião</td>
                                <td><?= $sem ?></td>
                            </tr>
                            <tr>
                                <td>Outras</td>
                                <td><?= $outras ?></td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0">Quantitativo Por Cor:</h5>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>

                            <th scope="col"><b>Cor</b></th>
                            <th scope="col"><b>Quantidade</b></th>

                        </tr>
                    </thead>
                    <tbody class="customtable">
                        <tr>                             
                                <td>Branca</td>
                                <td><?= $branca ?></td>
                            </tr>
                            <tr>
                                <td>Parda</td>
                                <td><?= $parda ?></td>  
                            </tr>
                            <tr>   
                                <td>Preta</td>
                                <td><?= $preta ?></td> 
                            </tr>
                            <tr>   
                                <td>Amarela</td>
                                <td><?= $amarela ?></td>
                            </tr>
                            <tr>
                                <td>Indigina</td>
                                <td><?= $indigena ?></td>
                            </tr>
                            <tr>
                                <td>Não Informado</td>
                                <td><?= $NI ?></td>
                            </tr>                 
                    </tbody>
                </table>
            </div>
        </div>


        <!--  tab -->  



    </div><!-- fim container -->
</div><!-- fim wrapper -->
