<div class="page-wrapper">


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
        <div class="card">
            <div class="card-body wizard-content">
                <h4 class="card-title">Casa Rosa Mulher</h4>
                <h6 class="card-subtitle"></h6>
                <form id="example-form" action="<?= base_url(); ?>Cadastro_mulher/editar_cadastroMulher" method="Post" class="m-t-40">
                    <div> 

                        <h3>Atualizar Cadastro da Mulher</h3>
                        <section>
              <input type="hidden" class="form-control" id="id" name="cod_login" value="<?= $usuarias[0]->cod_usuaria ?>">
                            <div class="row">
                                <div class="form-group col-md-5">
                                    <label for="nome">Nome:*</label>
                                    <input type="text" class="form-control" id="nome" name="nome" value="<?= $usuarias[0]->nome ?>" >
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="data_nascimento">Data de Nascimento:*</label>
                                    <input type="date" class="form-control" id="data_nascimento"name="data_nascimento" value="<?= $usuarias[0]->data_nascimento ?>" >
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Escolaridade:*</label>
                                    <select class="form-control" name="escola" >
                                        <option disabled="" selected=""></option>
                                        <?php foreach ($escola as $escol) { ?>
                                            <option value="<?= $escol->cod_escolaridade ?>"><?= $escol->descricao ?></option>
                                        <?php } ?>

                                    </select> 
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="rg">RG:*</label>
                                    <input type="text" class="form-control" id="rg" name="rg" value="<?= $usuarias[0]->rg ?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="o_expe">Órgão Expedidor:*</label>
                                    <input type="text" class="form-control" id="o_expe" name="o_expe" value=" <?= $usuarias[0]->orgao_expedidor ?>" >
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="cpf">CPF:*</label>
                                    <input type="text" class="form-control" id="cpf" name="cpf" value=" <?= $usuarias[0]->cpf?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="situ_conjugal">Situação Conjugal</label>
                                    <select class="form-control" name="situ_conjugal">
                                        <option disabled="" selected=""></option>
                                        <?php foreach ($situ_conjugal as $sconju) { ?>
                                            <option value="<?= $sconju->cod_situacao_conjugal ==1 ?>"><?= $sconju->descricao ?></option>
                                        <?php } ?>

                                    </select> 
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="endereco">Endereço Residencial:*</label>
                                    <input type="text" class="form-control" id="endereco" name="endereco" value=" <?= $usuarias[0]->residencial?>"  >
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="numero">Número:*</label>
                                    <input type="text" class="form-control" id="numero" name="numero" >
                                </div>


                                <div class="form-group col-md-4">
                                    <label for="bairro">Bairro:*</label>
                                    <input type="text" class="form-control" id="bairro" name="bairro"  >
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="cidade">Cidade:*</label>
                                      <input type="text" class="form-control" id="cidade" name="cidade" >
                                </div>


                            </div>
                            <div class="row">


                                <div class="form-group col-md-2">
                                    <label for="estado">Estado</label>
                                    <input type="text" class="form-control" id="estado" name="estado"  >
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="cep">CEP:</label>
                                    <input type="text" class="form-control" id="cep" name="cep">
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="zona">Zona:*</label>
                                    <select class="form-control" name="zona" >
                                        <option disabled="" selected=""></option>
                                        <option value="urbana">Zona Urbana</option>
                                        <option value="rural">Zona Rural</option>

                                    </select> 
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="celular">Celular:*</label>
                                    <input type="tel" class="form-control" id="celular" name="celular" value=" <?= $usuarias[0]->celular ?>">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="telefone">Telefone:</label>
                                    <input type="tel" class="form-control" id="telefone" name="telefone" value=" <?= $usuarias[0]->telefone ?>" >
                                </div>                             

                            </div>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="o_sexual">Orientação Sexual:*</label>
                                    <select class="form-control" name="o_sexual" >
                                        <option disabled="" selected=""></option>
                                        <?php foreach ($orientacao_sexual as $o_sexual) { ?>
                                            <option value="<?= $o_sexual->cod_orientacao_sexual ?>"><?= $o_sexual->descricao ?></option>
                                        <?php } ?>

                                    </select> 
                                </div>

                              

                                <div class="form-group col-md-2">
                                    <label for="cor">Cor:</label>
                                    <select class="form-control" name="cor" >
                                        <option disabled="" selected=""></option>
                                        <?php foreach ($cor as $cores) { ?>
                                            <option value="<?= $cores->cod_cor ?>"><?= $cores->descricao ?></option>
                                        <?php } ?>

                                    </select> 
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="genero">Renda Familiar</label>
                                    <select class="form-control" name="renda" >
                                        <option disabled="" selected=""></option>
                                        <?php foreach ($renda_familiar as $renda) { ?>
                                            <option value="<?= $renda->cod_renda_familiar ?>"><?= $renda->descricao ?></option>
                                        <?php } ?>

                                    </select> 
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="profi">Profissão:*</label>
                                    <select class="form-control" name="profi" >
                                        <option disabled="" selected=""></option>
                                        <?php foreach ($profissao as $profi) { ?>
                                            <option value="<?= $profi->cod_profissao ?>"><?= $profi->descricao ?></option>
                                        <?php } ?>

                                    </select> 
                                </div>

                            </div>





                            <div class="row">

                                <div class="form-group col-md-2">
                                    <label for="sexo">Sexo:*</label>
                                    <select class="form-control" name="sexo" >
                                        <option disabled="" selected=""></option>
                                        <option value="masculino">Masculino</option>
                                        <option value="feminino">Feminino</option>
                                        <option value="hemafrodita">Hemafrodita</option>

                                    </select> 
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="religiao">Religião</label>
                                    <select class="form-control" name="religiao">
                                        <option disabled="" selected=""></option>
                                        <?php foreach ($religiao as $reli) { ?>
                                            <option value="<?= $reli->cod_religiao ?>"><?= $reli->descricao ?></option>
                                        <?php } ?>

                                    </select> 
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="n_filhos">Nº de Filhos:</label>
                                    <input type="text" class="form-control" id="n_filhos" name="n_filhos" value=" <?= $usuarias[0]-> ?>" >
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="data_filho">Data de Nascimento:</label>
                                    <input type="date" class="form-control" id="data_filho" name="data_filho" value=" <?= $usuarias[0]->orgao_expedidor ?>">
                                </div>

                            </div>
                            <div class="row">

                                <div class="form-group col-md-6">
                                    <label for="pont_referencia">Ponto de Referência</label>
                                    <input type="text" class="form-control" id="pont_referencia" name="pont_referencia" value=" <?= $usuarias[0]->orgao_expedidor ?>">
                                </div>

                                <div class="form-group col-md-6">                     

                                    <label>Anexar arquivo:</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="arquivo" id="validatedCustomFile" >
                                        <label class="custom-file-label" for="validatedCustomFile">Escolha o arquivo...</label>
                                        <div class="invalid-feedback">Este formato de arquivo e invalido!</div>
                                    </div>                    
                                </div>


                            </div>



                            <!--  fim editor -->

                            (*)Obrigatorio.
                        </section>



                        <h3>Busca Pelo Serviço</h3>
                        <section>
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

                            <!-- inicio da linha encaminhada e espotânea -->

                            <div class="row">
                                <div class="form-group col-md-2"> 
                                    
                                          <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="busca" id="como">
                                        <label class="custom-control-label" for="como">Espontânea?</label>
                                    </div>
                                    
                                </div>

                                <div class="form-group col-md-2"> 
                           
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="busca" id="encamin">
                                        <label class="custom-control-label" for="encamin">Encaminhada?</label>
                                    </div>
                                    

                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">

                                    <label>Como soube?</label>
                                    <select class="form-control" name="como" id="comosoub" >
                                        <option disabled="" selected=""></option>
                                        <?php foreach ($soubecomo as $como) { ?>
                                            <option value="<?= $como->cod_como_soube_do_servico ?>"><?= $como->descricao ?></option>
                                        <?php } ?>

                                    </select> 


                                </div>

                                <div class="form-group col-md-4"> 
                                    <label>Por Qual Instituição? </label>
                                    <select class="form-control" name="institu" id="institu" >
                                        <option disabled="" selected=""></option>
                                        <?php foreach ($espontanea as $espo) { ?>
                                            <option value="<?= $espo->cod_instituicoes ?>"><?= $espo->nome ?></option>
                                        <?php } ?>

                                    </select>  

                                </div>




                            </div> <!-- fim da linha encaminhada e espotânea -->


                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="motivo">Motivo da procura:*</label>
                                    <select class="form-control" id="motivo" name="motivo" required>
                                        <option disabled="" selected=""></option>
                                        <?php foreach ($motivos as $motivo) { ?>
                                            <option value="<?= $motivo->cod_motivo_procura ?>"><?= $motivo->descricao ?></option>
                                        <?php } ?>

                                    </select> 

                                </div><!-- fim da linha motivo da procura -->

                                <div class="form-group col-md-4" id="cursos">
                                    <label for="curso">Qual Curso:</label>
                                    <select class="form-control"  name="curso">
                                        <option enable="" selected=""></option>
                                        <?php foreach ($cursos as $curso) { ?>
                                            <option value="<?= $curso->cod_curso ?>"><?= $curso->descricao ?></option>
                                        <?php } ?>
                                    </select>
                                </div> <!-- fim da linha cursos -->

                                <div class="form-group col-md-4" id="hora">
                                    <label >Disponibilidade de Horário:</label><br>
                                    <div class="form-check form-check-inline">  
                                        <input class="form-check-input" type="checkbox"  id="inlineCheckbox1" name="dispo" value="m">
                                        <label class="form-check-label" id="hora" for="inlineCheckbox1">Manhã</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox"  id="inlineCheckbox2" name="dispo" value="t" >
                                        <label class="form-check-label"  for="inlineCheckbox2"> Tarde</label>
                                    </div>
                                </div>

                            </div><!-- fim da DIV row -->
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <div class="control-group">
                                        <label class="control-label" for="observacao">Oservações:</label>
                                        <div class="controls">
                                            <textarea class="input-xlarge textarea" name="observacao" value=" <?= $usuarias[0]->observacao ?>" placeholder="Texto ..." style="width: 910px; height: 200px"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <hr/>

                            (*)Obrigatorio.
                        </section>

                        <h3>Screening de Rotina</h3>
                        <section>
                            <fieldset>
                                <label>-Você já se sentiu humilhada, intimidada, amedrontada, ameaçada, diminuida, acuada por uma pessoa importante para você(seu parceiro/a,pai/mãe,tio,irmão)?(Violência Psicológica)</label>           
                                <br>
                                <div class="row">

                                    <div class="form-group col-md-1">
                                              <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="vp" value="vp1" id="vp">
                                        <label class="custom-control-label" for="vp">Não</label>
                                    </div>
                                       
                                    </div>
                                    
                                    <div class="form-group col-md-1">

                                                   <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="vp" value="vp2" id="vp2">
                                        <label class="custom-control-label" for="vp2">sim</label>
                                    </div>

                                    </div>
                                    <div class="form-group col-md-10">
                                        <div class="form-group row">
                                            <label for="agresso" class="col-sm-2 col-form-label">Por Quem?:</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="agresso" name="agresso" placeholder="Agressor..">
                                            </div>
                                        </div>
                                    </div>       

                                </div>

                            </fieldset>

                            <br>

                            <fieldset>
                                <label>-Alguém próximo a você lhê bate ou ja bateu? Ou Alguém importante para você lhe agrediu fisicamente(seu parceiro/a,pai/mãe,tio,irmão)?(Violência Física)</label>
                                <br>
                                <div class="row">

                                    <div class="form-group col-md-1">
                                        <div class="form-group row">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" name="vp" value="vp1">
                                                <label class="form-check-label" for="inlineRadio1"> Não</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-1">

                                        <div class="form-group row">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" name="vp" value="vp2">
                                            <label class="form-check-label" for="inlineRadio2">Sim</label>
                                        </div>

                                    </div>
                                    <div class="form-group col-md-10">
                                        <div class="form-group row">
                                            <label for="agresso" class="col-sm-2 col-form-label">Por Quem?:</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="agresso" name="agresso" placeholder="Agressor..">
                                            </div>
                                        </div>
                                    </div>       

                                </div>
                            </fieldset>

                            <br>

                            <fieldset>
                                <label>-Você já se sentiu forçada a ter relações sexuais com alguém? (Violência Sexual)</label>
                                <div class="row">

                                    <div class="form-group col-md-1">
                                        <div class="form-group row">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" name="vp" value="vp1">
                                                <label class="form-check-label" for="inlineRadio1"> Não</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-1">

                                        <div class="form-group row">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" name="vp" value="vp2">
                                            <label class="form-check-label" for="inlineRadio2">Sim</label>
                                        </div>

                                    </div>
                                    <div class="form-group col-md-10">
                                        <div class="form-group row">
                                            <label for="agresso" class="col-sm-2 col-form-label">Por Quem?:</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="agresso" name="agresso" placeholder="Agressor..">
                                            </div>
                                        </div>
                                    </div>       

                                </div>

                            </fieldset>
                            <br>

                            <fieldset>
                                <label>Você já teve algum objeto pessoal, da sua casa ou instrumento de trabalho danificado ou subtraido por alguma pessoa próxima a você? (Violência Econômica)</label>
                                <div class="row">

                                    <div class="form-group col-md-1">
                                        <div class="form-group row">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" name="vp" value="vp1">
                                                <label class="form-check-label" for="inlineRadio1"> Não</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-1">

                                        <div class="form-group row">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" name="vp" value="vp2">
                                            <label class="form-check-label" for="inlineRadio2">Sim</label>
                                        </div>

                                    </div>
                                    <div class="form-group col-md-10">
                                        <div class="form-group row">
                                            <label for="agresso" class="col-sm-2 col-form-label">Por Quem?:</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="agresso" name="agresso" placeholder="Agressor..">
                                            </div>
                                        </div>
                                    </div>       

                                </div>
                            </fieldset>
                            <br>

                            <fieldset>
                                <label>Você já se sentiu ofendida por uma pessoa próxima ter te difamado, injuriado e ou caluniado? (Violência Moral)</label>
                                <div class="row">

                                    <div class="form-group col-md-1">
                                        <div class="form-group row">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" name="vp" value="vp1">
                                                <label class="form-check-label" for="inlineRadio1"> Não</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-1">

                                        <div class="form-group row">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" name="vp" value="vp2">
                                            <label class="form-check-label" for="inlineRadio2">Sim</label>
                                        </div>

                                    </div>
                                    <div class="form-group col-md-10">
                                        <div class="form-group row">
                                            <label for="agresso" class="col-sm-2 col-form-label">Por Quem?:</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="agresso" name="agresso" placeholder="Agressor..">
                                            </div>
                                        </div>
                                    </div>       

                                </div>
                            </fieldset>
                            <br><br>


                        </section>

                    </div>
                </form>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->




