 
<div class="page-wrapper">
    <div class="page-breadcrumb">

        
    </div>
    <div class="container-fluid">
         <?php if ($this->session->flashdata('error') == TRUE): ?>
             <div class="alert alert-success-danger">&times;</a>
                <strong> <?php echo $this->session->flashdata('error'); ?></strong>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-2"> 
                  <?php foreach ($mulher as $user) : ?>
                <a class="btn btn-success" href="<?= base_url('Relatorios/Pdf_informativo/' .$user['cod_usuaria']) ?>" target="_blank">Gerar PDF</a>
            </div>
 
        </div> <!-- fim da linha  -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <center> <h3>Relátorio Informativo</h3> </center>
 
    <hr>
                                <h4>Identificação da Usuária</h4>
                                  <hr>
 <div class="row">
                            <div class="form-group col-md-1">
                                <label> ID</label>
                                <input type="text" class="form-control" id="id" name="cod_login" value="<?= $user['cod_usuaria'] ?>" disabled="">
                            </div>

                            <div class="form-group col-md-5">
                                <label for="nome">Nome:</label>                
                                <input type="text" class="form-control" id="nome"  name="nome" value="<?= $user['nome'] ?>" disabled="">


                            </div>
                            <div class="form-group col-md-3">
                                <label for="data_nascimento">Data de Nascimento:</label>
                                <input type="text" class="form-control" id="data_nascimento" name="data_nascimento" value="<?= date("d/m/Y", strtotime($user['data_nascimento'])) ?>" disabled="">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Escolaridade:</label>
                                <input type="text" class="form-control" id="escola"  name="escola" value="<?= $user['descricao_escol'] ?>" disabled="">                  
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="rg">RG:</label>
                                <input type="text" class="form-control rg-inputmask" id="rg-mask" name="rg" value="<?= $user['rg']; ?>" disabled="">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="o_expe">Órgão Expedidor:</label>
                                <input type="text" class="form-control" id="o_expe" name="o_expe" value=" <?= $user['orgao_expedidor'] ?>" disabled="">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="cpf">CPF:</label>
                                <input type="text" class="form-control cpf-inputmask" id="cpf-mask" name="cpf" value="<?= $user['cpf'] ?>" disabled="">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="situ_conjugal">Situação Conjugal:</label>
                                <input type="text" class="form-control" name="situ_conjugal" value="  <?= $user['descricao_conjugal'] ?>" disabled="">

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="endereco">Endereço Residencial:</label>
                                <input type="text" class="form-control" id="endereco" name="endereco" value="<?= $user['residencial'] ?>" disabled="">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="numero">Número:</label>
                                <input type="text" class="form-control" id="numero" name="numero" value="<?= $user['numero_imovel'] ?>" disabled="" >
                            </div>


                            <div class="form-group col-md-3">
                                <label for="bairro">Bairro:</label>
                                <input type="text" class="form-control" id="bairro" name="bairro" value="<?= $user['bairro'] ?>" disabled="">
                            </div>

                             <div class="form-group col-md-3">
                                <label for="cidade">Cidade:</label>
                                <input type="text" class="form-control" id="cidade" name="cidade" value="<?= $user['nome_cidade'] ?>" disabled="" >
                            </div>

                        </div>
                        <div class="row">

                           

                            <div class="form-group col-md-2">
                                <label for="estado">Estado:</label>
                                <input type="text" class="form-control" id="estado" name="estado" value="<?= $user['nome_estado'] ?>" disabled="" >
                            </div>
                            <div class="form-group col-md-2">
                                <label for="cep">CEP:</label>
                                <input type="text" class="form-control cep-inputmask" id="cep-mask" name="cep" value="<?= $user['cep'] ?>" disabled="">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="zona">Zona:</label>
                                <input  class=" form-control "  name="zona" value="<?= $user['zona'] ?>" disabled="">

                            </div>
                            <div class="form-group col-md-3">
                                <label for="celular">Celular:</label>
                                <input type="tel" class="form-control phone-inputmask" id="celular-mask" name="celular" value="<?= $user['celular']; ?>" disabled="" >
                            </div>

                               <div class="form-group col-md-2">
                                <label for="cor">Cor:</label>
                                <input class="form-control"    name="cor" value="<?= $user['descricao_cor'] ?>" disabled="">

                            </div>
                        </div>
                   
                    <hr>
                     <h4>Procedência do Caso</h4>
                    <hr> 
                     
                      <div class="row">
                            <div class="form-group col-md-12">
                             
                                <textarea type="text" class="form-control" id="c_finais" name="c_finais" weight="256"disabled=""><?= $user['descricao_busca'] ?>,  <?= $user['descricao_como'] ?> <?= $user['nome_institu'] ?></textarea>
                            </div>
                          
                     </div>
                     <hr>
                     <h4>Metodologia Utilizada</h4>
                    <hr> 
                      <div class="row">
                            <div class="form-group col-md-12">
                             
                                <textarea type="text" class="form-control" name="metodologia" weight="256"disabled=""><?= $user['metodologia_utilizada'] ?></textarea>
                            </div>
                          
                     </div>
                    
                      <hr>
                     <h4>Considerações Finais</h4>
                    <hr> 
                      <div class="row">
                            <div class="form-group col-md-12">
                             
                                <textarea type="text" class="form-control" name="c_finais" weight="256"disabled=""><?= $user['consideracoes_finais']; ?></textarea>
                            </div>
                          
                     </div>
                     </div>
   <?php endforeach;  ?>


                </div>
            </div>
        </div>
    </div>
</div>








                       
                   
   
                 
