<div class="page-wrapper">
      <script type="text/javascript">
                                $(document).ready(function () {
                                    $('#cursos').hide();
                                    $('#hora').hide();

                                    $('#motivo').change(function () {
                                        if ($('#motivo').val() == 4) {
                                            $('#cursos').show();
                                            $('#hora').show();
                                        } else {
                                            $('#cursos').hide();
                                            $('#hora').hide();
                                        }
                                    });
                                });

                            </script> 

    <div class="container-fluid">     

        <label>Tem Filho(s)?</label><br>

        <label class="inline">Sim</label>
        <input type="radio" class="radio-inline" data-toggle="modal" data-target="#exampleModalFilho" name="filho" value="1" id="filho">
        <label class="inline">Não</label>
        <input type="radio" class="radio-inline" name="filho" value="2" id="filho">
        <br><br>
      
           <div class="col-md-7"> 
        <?php
        $numero = $num_filhos;
        for ($i = 1; $i <= $numero; $i++) {
            echo "<label for='nascimento'>Data de Nascimento do</label>  " . $i . "º  filho:  
               <div class='col-md-3'> <div class='form-group'> <input type='date' class='form-control' id='data_filho' name='data_filho' placeholder='Data de Nascimento dos filhos..'></div> </div>";
        }
        ?>
           </div>
     
           
         <br><br>
    </div>
</div>





<!-- Modal -->
<div class="modal fade" id="exampleModalFilho" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form id="n_filhos" action="<?= base_url(); ?>Dashboard/testefilho" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Quantos Filhos?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            

            <br> <br>
            
            <div class="col-lg-7">
                  
                <div class="input-group">     
                    <input type="text" class="form-control" id="n_filhos" name="n_filhos" placeholder="Quantidade de filhos.." > 
                   
                </div>
            </div>
              <br> <br>
              
           

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-success">OK</button>
      </div>
        </form>  
    </div>
  </div>
</div>