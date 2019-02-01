<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">

        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h3 class="page-title">Detalhes do Cadastro da Usuária</h3>

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
        <!-- Tabs -->   <?php foreach ($usuarias as $user) : ?>
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Dados Pessoais</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Busca Pelo Serviço</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Screening</span></a> </li>
                                  <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#consi" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Considerações Finais</span></a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content tabcontent-border">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="p-20">
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
                                <label for="s_moradia">Situação de Moradia:</label>
                                <input type="text" class="form-control" id="s_moradia" name="s_moradia" value="<?= $user['situacao_moradia']; ?>" disabled="">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="bairro">Bairro:</label>
                                <input type="text" class="form-control" id="bairro" name="bairro" value="<?= $user['bairro'] ?>" disabled="">
                            </div>


                        </div>
                        <div class="row">

                            <div class="form-group col-md-3">
                                <label for="cidade">Cidade:</label>
                                <input type="text" class="form-control" id="cidade" name="cidade" value="<?= $user['nome_cidade'] ?>" disabled="" >
                            </div>

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

                        </div>
                        <div class="row">

                            <div class="form-group col-md-3">
                                <label for="telefone">Telefone:</label>
                                <input type="tel" class="form-control" id="telefone" name="telefone" value="<?= $user['telefone']; ?>" disabled="">
                            </div>  
                            <div class="form-group col-md-3">
                                <label for="o_sexual">Orientação Sexual:</label>
                                <input type="text" class="form-control" name="o_sexual"  value="<?= $user['descricao_sexual'] ?>" disabled="">

                            </div>

                            <div class="form-group col-md-2">
                                <label for="cor">Cor:</label>
                                <input class="form-control"    name="cor" value="<?= $user['descricao_cor'] ?>" disabled="">

                            </div>

                            <div class="form-group col-md-3">
                                <label for="genero">Renda Familiar:</label>
                                <input type="text" class="form-control"  name="renda" value="<?= $user['descricao_renda'] ?>"  disabled="">

                            </div>

                        </div>





                        <div class="form-group row">
                            <div class="form-group col-md-3">
                                <label for="profi">Profissão:</label>
                                <input type="text" class="form-control" name="profi" value="<?= $user['descricao_p'] ?>" disabled="" >

                            </div>

                            <div class="form-group col-md-2">
                                <label for="sexo">Sexo:</label>
                                <input type="text"  class=" form-control "  name="sexo"  value="<?= $user['sexo'] ?> "disabled="">

                            </div>

                            <div class="form-group col-md-2">
                                <label for="religiao">Religião:</label>
                                <input type="text"  class="form-control" name="religiao" value="<?= $user['descricao_r'] ?>" disabled="">

                            </div>



                            <div class="form-group col-md-2">
                                <label for="data_filho">Data de Nascimento:</label>
                                <input type="text" class="form-control" id="data_filho" name="data_filho"  value="" disabled="">
                            </div>

                            
                            <div class="form-group col-md-3">
                                <label for="h_familia">Historico Familiar:</label>
                                <input type="text" class="form-control" id="h_familia" name="h_familia" value="<?= $user['historico_familiar']; ?>" disabled="">
                            </div>
                            
                        </div>
                                

                                    </div>
                                </div>
                                <div class="tab-pane  p-20" id="profile" role="tabpanel">
                                    <div class="p-20">
                                        <div class="row">
                            <div class="form-group col-md-2"> 
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="busca" id="<?= $user['descricao_busca'] ?>" value="<?= $user['descricao_busca'] ?>" >
                                    <label class="custom-control-label" for="<?= $user['descricao_busca'] ?>"><?= $user['descricao_busca'] ?></label>
                                </div>
                            </div>
                        </div>



                        <!--fim do como... -->


                        <div class="row">
                            <div class="form-group col-md-4">

                                <label>Como soube?</label>
                                <input type="text" class="form-control" name="como" value=" <?= $user['descricao_como'] ?>" disabled="" >

                            </div>

                            <div class="form-group col-md-4"> 
                                <label>Por Qual Instituição? </label>
                                <input type="text" class="form-control" name="institu"  value="<?= $user['nome_institu'] ?>" id="institu" disabled="" >


                            </div>




                        </div> <!-- fim da linha encaminhada e espotânea -->


                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="motivo">Motivo da procura:</label>
                                <input  type="text" class="form-control" id="motivo" name="motivo" value=" <?= $user['descricao_motivo'] ?>" disabled="">



                            </div><!-- fim da linha motivo da procura -->

                            <div class="form-group col-md-4" id="cursos">
                                <label for="curso">Qual Curso:</label>
                                <input type="text" class="form-control"  name="curso" value="<?= $user['qual_curso'] ?>" disabled="">

                            </div> <!-- fim da linha cursos -->

                            <div class="form-group col-md-4" id="hora" >
                                <label >Disponibilidade de Horário:</label><br>
                             
                                    <input class="form-control" type="text"  id="inlineCheckbox1" name="dispo" value="<?= $user['disponibilidade'] ?>" disabled>        
                                </div>
                  
                           

                        </div><!-- fim da DIV row -->

                        <!-- editor -->
                        <div class="row">
                            <div class="col-12">

                                <h4 class="card-title">Observação:</h4>
                                <!-- Create the editor container -->
                                <div id="dvCentro">
                                    <textarea class="ckeditor"  id="observacao" name="observacao"  disabled=""><?= $user['observacao'] ?></textarea>

                                </div>
                            </div>
                        </div> 
                                    </div>
                                </div>
                                <div class="tab-pane p-20" id="messages" role="tabpanel">
                                    <div class="p-20">
                                       <fieldset>
                            <label>-Você já se sentiu humilhada, intimidada, amedrontada, ameaçada, diminuida, acuada por uma pessoa importante para você(seu parceiro/a,pai/mãe,tio,irmão)?(Violência Psicológica)</label>           
                            <br>

                            <div class="row"> 
                                <div class="form-group col-md-3">
                                    <div class="form-group row">

                                        <label for="vp" class="col-sm-3 text-right control-label col-form-label">Resposta</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="vp" name="vp" value="<?= $user['resposta_psicologica'] ?>" disabled="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-5">
                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Por Quem?</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" name="agressoP" value="<?= $user['agresso_psico'] ?>" disabled="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-4"> 
                                    <div class="form-group row">
                                        <label  for="fname" class="col-md-3 m-t-9">Violência:</label>
                                        <div class="col-md-7">
                                            <input type="text" class=" form-control"  name="psicolo" value="<?= $user['violencia_psico'] ?>" disabled="">

                                        </div>
                                    </div>
                                </div><!-- fim da lin -->
                            </div>

                        </fieldset>
                        <hr>
                        <br>

                        <fieldset>
                            <label>-Alguém próximo a você lhê bate ou ja bateu? Ou Alguém importante para você lhe agrediu fisicamente(seu parceiro/a,pai/mãe,tio,irmão)?(Violência Física)</label>
                            <br>

                            <div class="row">
                                <div class="form-group col-md-3">
                                    <div class="form-group row">

                                        <label for="vp" class="col-sm-3 text-right control-label col-form-label">Resposta</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="vp" name="vp" value="<?= $user['resposta_fisica'] ?>" disabled="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-5">
                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Por Quem?</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" name="agressoF" value="<?= $user['agresso_fisico'] ?>" disabled="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-4"> 
                                    <div class="form-group row">
                                        <label  for="fname" class="col-md-3 m-t-9">Violência:</label>
                                        <div class="col-md-7">
                                            <input type="text" class=" form-control"  name="vfisica" value="<?= $user['violencia_fisica'] ?>" disabled="">

                                        </div>
                                    </div>
                                </div><!-- fim da lin -->
                            </div>
                        </fieldset>
                        <hr>
                        <br>

                        <fieldset>
                            <label>-Você já se sentiu forçada a ter relações sexuais com alguém? (Violência Sexual)</label>

                            <div class="row">
                                <div class="form-group col-md-3">
                                    <div class="form-group row">

                                        <label for="vp" class="col-sm-3 text-right control-label col-form-label">Resposta</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="vp" name="vp" value="<?= $user['resposta_sexual'] ?>" disabled="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-5">
                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Por Quem?</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" name="agressoS" value="<?= $user['agresso_sexual'] ?>" disabled="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-4"> 
                                    <div class="form-group row">
                                        <label  for="fname" class="col-md-3 m-t-9">Violência:</label>
                                        <div class="col-md-7">
                                            <input type="text" class=" form-control"  name="vsexual" value="<?= $user['violencia_sexual'] ?>" disabled="">

                                        </div>
                                    </div>
                                </div><!-- fim da lin -->
                            </div>

                        </fieldset>
                        <hr>
                        <br>

                        <fieldset>
                            <label>Você já teve algum objeto pessoal, da sua casa ou instrumento de trabalho danificado ou subtraido por alguma pessoa próxima a você? (Violência Econômica)</label>

                            <div class="row">
                                <div class="form-group col-md-3">
                                    <div class="form-group row">

                                        <label for="vp" class="col-sm-3 text-right control-label col-form-label">Resposta</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="vp" name="vp" value="<?= $user['resposta_economica'] ?>" disabled="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-5">
                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Por Quem?</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" name="agressoE" value="<?= $user['agresso_econo'] ?>" disabled="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-4"> 
                                    <div class="form-group row">
                                        <label  for="fname" class="col-md-3 m-t-9">Violência:</label>
                                        <div class="col-md-7">
                                            <input class=" form-control "name="veconomi" value="<?= $user['violencia_econo'] ?>" disabled="">

                                        </div>
                                    </div>
                                </div><!-- fim da lin -->
                            </div>
                        </fieldset>
                        <br>
                        <hr>
                        <fieldset>

                            <label>Você já se sentiu ofendida por uma pessoa próxima ter te difamado, injuriado e ou caluniado? (Violência Moral)</label>



                            <div class="row">
                                <div class="form-group col-md-3">
                                    <div class="form-group row">

                                        <label for="vp" class="col-sm-3 text-right control-label col-form-label">Resposta</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="vp" name="vp" value="<?= $user['resposta_moral'] ?>" disabled="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-5">
                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Por Quem?</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" name="agressoM" value="<?= $user['agresso_moral'] ?>" disabled="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-4"> 
                                    <div class="form-group row">
                                        <label  for="fname" class="col-md-3 m-t-9">Violência:</label>
                                        <div class="col-md-7">
                                            <input type="text" class=" form-control" name="vmoral" value="<?= $user['violencia_moral'] ?>" disabled="">

                                        </div>
                                    </div>
                                </div><!-- fim da lin -->
                            </div>
                            <br>
                            <div class="form-group col-md-5"> 
                                <div class="form-group row">
                                    
                                    <input type="text" class="form-check-control" id="exampleCheck1" name="NI" value="<?= $user['questionario'] ?>" disabled="">
                                      
                                    </div>
                            </div>
                                    </fieldset>
                                    </div>
                                </div>
                                <div class="tab-pane p-20" id="consi" role="tabpanel">
                                      <div class="p-20"> 
                                    
                      

                            <div class="row">

                                <div class="form-group col-md-6">
                                    <label for="situ_apre">Situação Apresentada:*</label>
                                    <input type="text" class="form-control"   id="situ_apre" name="situ_apre" value="<?= $user['situacao_apresentada'] ?>" disabled="">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="m_utlizada">Metodologia Utilizada:*</label>
                                    <input type="text" class="form-control"   id="m_utlizada" name="m_utlizada" value="<?= $user['metodologia_utilizada'] ?>" disabled="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="c_finais">Considerações Finais:</label>
                                    <textarea type="text" class="form-control" id="c_finais" name="c_finais" weight="256" disabled=""><?= $user['consideracoes_finais'] ?></textarea>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="encaminha">Encaminhamento:*</label>
                                    <textarea type="text" class="form-control" id="encaminha" name="encaminha" weight="256" disabled=""><?= $user['encaminhamentos'] ?> </textarea>
                                </div>
                            </div>
                        
                      
                                      </div>
                                    
                                </div>
                                
                                     <?php endforeach; ?>  
                            </div>
                            <div class="row">
            <div class="col-md-2">
                <a class="btn btn-primary btn-block" href="<?= base_url() ?>Cadastro_mulher/listar_usuarias" >Voltar</a>
            </div>
        </div>
                        </div>
                    </div>
                </div>

        
 
</div>
