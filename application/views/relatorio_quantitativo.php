   <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
             
            </div>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                 <h2 class="card-title m-b-0"><p class="text-center"> <b>Relátorio Quantitativo</b></p></h2>
                            </div>
                            <table class="table">
                               
                                  <thead>
                                    <tr>
                                     
                                        <th ><b>Idade</b></th>
                                        <th ><b>Quantidade</b></th>
                                     
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                    
                                      <td>> de 18</td>
                                      <td>Thornton</td>
                                    
                                    </tr>
                                    <tr>
                                   
                                     <td>18 a 25</td>
                                      <td>Thornton</td>
                                    
                                    </tr>
                                    <tr>
                                     
                                     <td>26 a 40</td>
                                      <td>the Bird</td>
                                     
                                    </tr>
                                     <tr>
                                      
                                      <td>> 40</td>
                                      <td>the Bird</td>
                                     
                                    </tr>
                                  </tbody>
                                  
                                  <!-- outra TAB -->
                                  <thead>
                                    <tr>
                                     
                                        <th><b>Escolaridade</b></th>
                                        <th><b>Quantidade</b></th>
                                     
                                    </tr>
                                  </thead>
                                  <tbody>
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
                                  </tbody>
                                   <!-- outra TAB -->
                                  <thead>
                                    <tr>
                                     
                                        <th><b>Renda</b></th>
                                        <th><b>Quantidade</b></th>
                                     
                                    </tr>
                                  </thead>
                                  <tbody>
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
                                     <td><?= $rda4?></td>
                                     
                                    </tr>
                                    
                                      <tr>
                                      <td>Sem Renda  </td>
                                     <td><?= $rdasem?></td>
                                     
                                    </tr>
                                  </tbody>
                                  <!-- outra TAB -->
                                  <thead>
                                    <tr>
                                     
                                        <th><b>Tipos de Serviços</b></th>
                                        <th><b>Quantidade</b></th>
                                     
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                    
                                      <td>Cursos Proficionalizantes</td>
                                      <td><?=  $curso ?></td>
                                    
                                    </tr>
                                    <tr>
                                   
                                     <td>Atendimento Social</td>
                                       <td><?=  $social ?></td>
                                    
                                    </tr>
                                    <tr>
                                     
                                     <td>Atendimento Psicologico</td>
                                      <td><?=  $psicologico ?></td>
                                     
                                    </tr>
                                     <tr>
                                      
                                      <td>Atendimento Juridico </td>
                                        <td><?=  $juridico ?></td>
                                     
                                    </tr>
                                    
                                  </tbody>
                                  <!-- outra TAB -->
                                  <thead>
                                    <tr>
                                     
                                        <th><b>Tipos de Violência</b></th>
                                        <th><b>Quantidade</b></th>
                                     
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                    
                                      <td> Violência Psicologica</td>
                                      <td><?= $psico  ?></td>
                                    
                                    </tr>
                                    <tr>
                                   
                                     <td> Violência Fisica</td>
                                     <td><?= $fisica  ?></td>
                                    
                                    </tr>
                                    <tr>
                                     
                                     <td> Violência Sexual</td>
                                     <td><?= $sexual  ?></td>
                                     
                                    </tr>
                                     <tr>
                                      
                                      <td> Violência Moral </td>
                                      <td><?= $moral  ?></td>
                                     
                                    </tr>
                                     <tr>
                                      
                                      <td> Violência Econômica </td>
                                      <td><?= $econo  ?></td>
                                     
                                    </tr>
                                  </tbody>
                                   <!-- outra TAB -->
                                  <thead>
                                    <tr>
                                     
                                        <th><b>Religião</b></th>
                                        <th><b>Quantidade</b></th>
                                     
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                    
                                      <td>Católica</td>
                                      <td><?= $catolica ?></td>
                                    
                                    </tr>
                                    <tr>
                                   
                                     <td>Evangélica</td>
                                     <td><?= $evangel ?></td>
                                    
                                    </tr>
                                    <tr>
                                     
                                     <td>Espírita</td>
                                     <td><?= $espirita?></td>
                                     
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
                                   <!-- outra TAB -->
                                  <thead>
                                    <tr>
                                     
                                        <th><b>Cor</b></th>
                                        <th><b>Quantidade</b></th>
                                     
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                  
                                      <td>Branca</td>
                                      <td><?= $branca?></td>
                                   
                                    </tr>
                                    <tr>
                                   
                                     <td>Parda</td>
                                      <td><?= $parda?></td>
                                    
                                    </tr>
                                    <tr>
                                     
                                     <td>Preta</td>
                                      <td><?= $preta?></td>
                                     
                                    </tr>
                                     <tr>
                                      
                                      <td>Amarela</td>
                                      <td><?= $amarela?></td>
                                     
                                    </tr>
                                    <tr>
                                      
                                      <td>Indigina</td>
                                      <td><?= $indigena?></td>
                                     
                                    </tr>
                                     <tr>
                                      
                                      <td>Não Informado</td>
                                      <td><?= $NI?></td>
                                     
                                    </tr>                 
                                
                                  </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
   </div>