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
                <form id="example-form" action="<?= base_url(); ?>Cadastro_mulher/cadastrar_mulher" method="Post" class="m-t-40" >
                    <div> 

                        <h3>Cadastro da Mulher</h3>
                        <section>
                            <input type="hidden" class="form-control" id="id" name="cod_usuaria" value="">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="nome">Nome:*</label>                
                                    <input type="text" class="form-control" id="nome"  name="nome"  placeholder=" Nome da Usuária..." required>


                                </div>
                                <div class="form-group col-md-3">
                                    <label for="data_nascimento">Data de Nascimento:*</label>
                                    <input type="date" class="form-control" id="data_nascimento"name="data_nascimento" placeholder="Data de nascimento.." required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Escolaridade:*</label>
                                    <select   class="select2 form-control custom-select" style="width: 100%; height:36px;" name="escola" required>
                                        <option disabled="" selected=""></option>
                                        <?php foreach ($escola as $escol) { ?>
                                            <option value="<?= $escol->cod_escolaridade ?>"><?= $escol->descricao_escol ?></option>
                                        <?php } ?>

                                    </select> 
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="rg">RG:*</label>
                                    <input type="text" class="form-control rg-inputmask" id="rg-mask" name="rg" placeholder=" RG.." required>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="o_expe">Órgão Expedidor:*</label>
                                    <input type="text" class="form-control" id="o_expe" name="o_expe" placeholder=" Órgão expedidor.." required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="cpf">CPF:*</label>
                                    <input type="text" class="form-control cpf-inputmask" id="cpf-mask" name="cpf" placeholder=" CPF.." required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="situ_conjugal">Situação Conjugal:*</label>
                                    <select   class="select2 form-control custom-select" style="width: 100%; height:36px;" name="situ_conjugal" required>
                                        <option disabled="" selected=""></option>
                                        <?php foreach ($situ_conjugal as $sconju) { ?>
                                            <option value="<?= $sconju->cod_situacao_conjugal ?>"><?= $sconju->descricao_conjugal ?></option>
                                        <?php } ?>

                                    </select> 
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="endereco">Endereço Residencial:*</label>
                                    <input type="text" class="form-control" id="endereco" name="endereco" placeholder=" Endereço.." required>
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="numero">Número:</label>
                                    <input type="number" class="form-control" id="numero" name="numero" placeholder="Número da casa.."required >
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="s_moradia">Situação de Moradia:*</label>
                                    <input type="text" class="form-control" id="s_moradia" name="s_moradia" placeholder="Situação de Moradia.." required>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="bairro">Bairro:*</label>
                                    <input type="text" class="form-control" id="bairro" name="bairro" placeholder=" Bairro" required>
                                </div>




                            </div>
                            <div class="row">

                                <div class="form-group col-md-3">
                                    <label for="cidade">Cidade:*</label>
                                    <input type="text" class="form-control" id="cidade" name="cidade" placeholder=" Cidade" required >
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="estado">Estado:*</label>
                                    <input type="text" class="form-control" id="estado" name="estado" placeholder=" Estado" required >
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="cep">CEP:</label>
                                    <input type="text" class="form-control cep-inputmask" id="cep-mask" name="cep" placeholder=" CEP..">
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="zona">Zona:*</label>
                                    <select   class="select2 form-control custom-select" style="width: 100%; height:36px;" name="zona" required>
                                        <option disabled="" selected=""></option>
                                        <option value="urbana">Zona Urbana</option>
                                        <option value="rural">Zona Rural</option>

                                    </select> 
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="celular">Celular:*</label>
                                    <input type="tel" class="form-control phone-inputmask" id="celular-mask" name="celular" placeholder="Celular" required>
                                </div>



                            </div>
                            <div class="row">

                                <div class="form-group col-md-3">
                                    <label for="telefone">Telefone:</label>
                                    <input type="tel" class="form-control" id="telefone" name="telefone" placeholder=" Telefone Fixo">
                                </div>  
                                <div class="form-group col-md-3">
                                    <label for="o_sexual">Orientação Sexual:*</label>
                                    <select  class="select2 form-control custom-select" style="width: 100%; height:36px;" name="o_sexual" required>
                                        <option disabled="" selected=""></option>
                                        <?php foreach ($orientacao_sexual as $o_sexual) { ?>
                                            <option value="<?= $o_sexual->cod_orientacao_sexual ?>"><?= $o_sexual->descricao_sexual ?></option>
                                        <?php } ?>

                                    </select> 
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="cor">Cor:*</label>
                                    <select   class="select2 form-control custom-select" style="width: 100%; height:36px;" name="cor" required>
                                        <option disabled="" selected=""></option>
                                        <?php foreach ($cor as $cores) { ?>
                                            <option value="<?= $cores->cod_cor ?>"><?= $cores->descricao_cor ?></option>
                                        <?php } ?>

                                    </select> 
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="genero">Renda Familiar:*</label>
                                    <select   class="select2 form-control custom-select" style="width: 100%; height:36px;" name="renda" required>
                                        <option disabled="" selected=""></option>
                                        <?php foreach ($renda_familiar as $renda) { ?>
                                            <option value="<?= $renda->cod_renda_familiar ?>"><?= $renda->descricao_renda ?></option>
                                        <?php } ?>

                                    </select> 
                                </div>



                            </div>





                            <div class="form-group row">
                                <div class="form-group col-md-2">
                                    <label for="profi">Profissão:*</label>
                                    <select  class="select2 form-control custom-select" style="width: 100%; height:36px;" name="profi" required >
                                        <option disabled="" selected=""></option>
                                        <?php foreach ($profissao as $profi) { ?>
                                            <option value="<?= $profi->cod_profissao ?>"><?= $profi->descricao_p ?></option>
                                        <?php } ?>

                                    </select> 
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="sexo">Sexo:*</label>
                                    <select   class="select2 form-control custom-select" style="width: 100%; height:36px;" name="sexo" required>
                                        <option disabled="" selected=""></option>
                                        <option value="masculino">Masculino</option>
                                        <option value="feminino">Feminino</option>
                                        <option value="hemafrodita">Hemafrodita</option>

                                    </select> 
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="religiao">Religião:*</label>
                                    <select   class="select2 form-control custom-select" style="width: 100%; height:40px;" name="religiao" required>
                                        <option disabled="" selected=""></option>
                                        <?php foreach ($religiao as $reli) { ?>
                                            <option value="<?= $reli->cod_religiao ?>"><?= $reli->descricao_r ?></option>
                                        <?php } ?>

                                    </select> 
                                </div>

                                 <div class="form-group col-md-3">
                                    <label for="tdocs">Tipo de Arquivo:</label>
                                    <select   class="select2 form-control custom-select" style="width: 100%; height:40px;" name="tdocs">
                                        <option disabled="" selected=""></option>
                                        <?php foreach ($tdocumento as $tdocs) { ?>
                                            <option value="<?= $tdocs->cod_tipo_documento ?>"><?= $tdocs->descricao_arq ?></option>
                                        <?php } ?>

                                    </select> 
                                </div>
                                
                                   <div class="form-group col-md-3">                     

                                    <label>Anexar arquivo:</label>
                                    <div class="custom-file">
                                        <input type="file" class="form-control" name="arquivo" >
                                    </div>                    
                                </div>

                            </div>
                             <div class="row">
                                <div class="col-12">

                                    <h4 class="card-title">Historico Familiar:*</h4>
                                    <!-- Create the editor container -->
                                    <div id="dvCentro">
                                        <textarea class="ckeditor"  id="observacao" name="h_familia" placeholder="Historico familiar.." required></textarea>

                                    </div>
                                </div>
                            </div>
                 


                            <!--  fim editor -->

                            Campos Com (*) São Obrigatorios.
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
                                <div class="form-group col-md-4"> 
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="busca" id="expo" value="2" onclick="habilitarComo();"  >
                                        <label class="custom-control-label" for="expo">Expontânea</label>
                                    </div>
                                </div> 

                                <div class="form-group col-md-4"> 
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="busca" id="encamin" value="1" onclick="habilitarstu();" >
                                        <label class="custom-control-label" for="encamin">Encaminhada</label>
                                    </div>
                                </div>


                            </div>





                            <!--fim do como... -->


                            <div class="row">
                                <div class="form-group col-md-4" >

                                    <label>Como soube?</label>
                                    <select class="form-control" name="como"  id="comosoub" disabled >
                                        <option disabled="" selected=""></option>
                                        <?php foreach ($soubecomo as $como) { ?>
                                            <option value="<?= $como->cod_como_soube_do_servico ?>"><?= $como->descricao_como ?></option>
                                        <?php } ?>

                                    </select> 


                                </div>

                                <div class="form-group col-md-4" > 
                                    <label>Por Qual Instituição? </label>
                                    <select class="form-control" name="institu" id="institu" disabled>
                                        <option disabled="" selected=""></option>
                                        <?php foreach ($espontanea as $espo) { ?>
                                            <option value="<?= $espo->cod_instituicoes ?>"><?= $espo->nome_institu ?></option>
                                        <?php } ?>

                                    </select>  

                                </div>




                            </div> <!-- fim da linha encaminhada e espotânea -->


                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="motivo">Motivo da procura:*</label>
                                    <select class="form-control" id="motivo" name="motivo" required="required">
                                        <option disabled="" selected=""></option>
                                        <?php foreach ($motivos as $motivo) { ?>
                                            <option value="<?= $motivo->cod_motivo_procura ?>"><?= $motivo->descricao_motivo ?></option>
                                        <?php } ?>

                                    </select> 

                                </div><!-- fim da linha motivo da procura -->

                                <div class="form-group col-md-4" id="cursos">
                                    <label for="curso">Qual Curso:</label>
                                    <select class="form-control"  name="curso">
                                        <option enable="" selected=""></option>
                                        <?php foreach ($cursos as $curso) { ?>
                                            <option value="<?= $curso->descricao ?>"><?= $curso->descricao ?></option>
                                        <?php } ?>
                                    </select>
                                </div> <!-- fim da linha cursos -->

                                <div class="form-group col-md-4" id="hora" >
                                    <label >Disponibilidade de Horário:</label><br>
                                    <div class="form-check form-check-inline">  
                                        <input class="form-check-input" type="checkbox"  id="inlineCheckbox1" name="dispo" value="Manhã" >
                                        <label class="form-check-label" id="hora" for="inlineCheckbox1">Manhã</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox"  id="inlineCheckbox2" name="dispo" value="Tarde" >
                                        <label class="form-check-label"  for="inlineCheckbox2"> Tarde</label>
                                    </div>
                                </div>

                            </div><!-- fim da DIV row -->

                            <!-- editor -->
                            <div class="row">
                                <div class="col-12">

                                    <h4 class="card-title">Observação:</h4>
                                    <!-- Create the editor container -->
                                    <div id="dvCentro">
                                        <textarea class="ckeditor"  id="observacao" name="observacao"></textarea>

                                    </div>
                                </div>
                            </div>
                            <hr/>

                            Campos Com (*) São Obrigatorios.
                        </section>

                        <h3>Screening de Rotina</h3>
                        <section>

                            <fieldset>
                                <label>-Você já se sentiu humilhada, intimidada, amedrontada, ameaçada, diminuida, acuada por uma pessoa importante para você(seu parceiro/a,pai/mãe,tio,irmão)?(Violência Psicológica)</label>           
                                <br>
                                <div class="row">
                                    <div class="form-group col-md-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"  id="Radios1" name="vp" value="não">
                                            <label class="form-check-label" for="Radios1">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"  id="Radios1"  name="vp" value="sim">
                                            <label class="form-check-label" for="Radios1">Sim </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <div class="form-group row">

                                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Por Quem?</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="fname" name="agressoP" placeholder="...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4"> 
                                        <div class="form-group row">
                                            <label  for="fname" class="col-md-3 m-t-9">Violência:</label>
                                            <div class="col-md-7">
                                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="psicolo">
                                                    <option enable="" selected=""></option>
                                                    <?php foreach ($tipoviolencia as $violencia) { ?>
                                                        <option value="<?= $violencia->descricao ?>"><?= $violencia->descricao ?></option>
                                                    <?php } ?>
                                                </select>
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
                                    <div class="form-group col-md-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"  id="Radios3" name="vf" value="não">
                                            <label class="form-check-label" for="Radios3">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"  id="Radios3"  name="vf" value="sim">
                                            <label class="form-check-label" for="Radios3">Sim </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <div class="form-group row">

                                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Por Quem?</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="fname" name="agressoF" placeholder="...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4"> 
                                        <div class="form-group row">
                                            <label  for="fname" class="col-md-3 m-t-9">Violência:</label>
                                            <div class="col-md-7">
                                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="vfisica">
                                                    <option enable="" selected=""></option>
                                                    <?php foreach ($tipoviolencia as $violencia) { ?>
                                                        <option value="<?= $violencia->descricao ?>"><?= $violencia->descricao ?></option>
                                                    <?php } ?>
                                                </select>
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
                                    <div class="form-group col-md-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"  id="Radios4" name="vs" value="não">
                                            <label class="form-check-label" for="Radios4">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"  id="Radios4"  name="vs" value="sim">
                                            <label class="form-check-label" for="Radios4">Sim </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <div class="form-group row">

                                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Por Quem?</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="fname" name="agressoS" placeholder="...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4"> 
                                        <div class="form-group row">
                                            <label  for="fname" class="col-md-3 m-t-9">Violência:</label>
                                            <div class="col-md-7">
                                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="vsexual">
                                                    <option enable="" selected=""></option>
                                                    <?php foreach ($tipoviolencia as $violencia) { ?>
                                                        <option value="<?= $violencia->descricao ?>"><?= $violencia->descricao ?></option>
                                                    <?php } ?>
                                                </select>
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
                                    <div class="form-group col-md-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"  id="Radios5" name="ve" value="não">
                                            <label class="form-check-label" for="Radios5">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"  id="Radios5"  name="ve" value="sim">
                                            <label class="form-check-label" for="Radios5">Sim </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <div class="form-group row">

                                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Por Quem?</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="fname" name="agressoE" placeholder="...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4"> 
                                        <div class="form-group row">
                                            <label  for="fname" class="col-md-3 m-t-9">Violência:</label>
                                            <div class="col-md-7">
                                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="veconomi">
                                                    <option enable="" selected=""></option>
                                                    <?php foreach ($tipoviolencia as $violencia) { ?>
                                                        <option value="<?= $violencia->descricao ?>"><?= $violencia->descricao ?></option>
                                                    <?php } ?>
                                                </select>
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
                                    <div class="form-group col-md-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"  id="Radios6" name="vm" value="não">
                                            <label class="form-check-label" for="Radios6">Não</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="Radios6"  name="vm" value="sim">
                                            <label class="form-check-label" for="Radios6">Sim </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <div class="form-group row">

                                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Por Quem?</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="fname" name="agressoM" placeholder="...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4"> 
                                        <div class="form-group row">
                                            <label  for="fname" class="col-md-3 m-t-9">Violência:</label>
                                            <div class="col-md-7">
                                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="vmoral">
                                                    <option enable="" selected=""></option>
                                                    <?php foreach ($tipoviolencia as $violencia) { ?>
                                                        <option value="<?= $violencia->descricao ?>"><?= $violencia->descricao ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div><!-- fim da lin -->
                                </div>
                                <br>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="NI" value="Não Informado">
                                    <label class="form-check-label" for="exampleCheck1">Não Informado</label>
                                </div>
                            </fieldset>

                            <br><br>


                        </section>

                        <h3>Considerações finais</h3>
                        <section>

                            <div class="row">

                                <div class="form-group col-md-6">
                                    <label for="situ_apre">Situação Apresentada:*</label>
                                    <input type="text" class="form-control"   id="situ_apre" name="situ_apre" placeholder="Informe a Situação apresentada" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="m_utlizada">Metodologia Utilizada:*</label>
                                    <input type="text" class="form-control"   id="m_utlizada" name="m_utlizada" placeholder="Informe a Metodologia utilizada no atendimento" required>
                                </div>
                            </div>
                            <div class="row">
                                

                                <div class="form-group col-md-6">
                                    <label for="encaminha">Encaminhamento:</label>
                                    <textarea type="text" class="form-control" id="encaminha" name="encaminha" weight="256" placeholder="Informe os dados do encaminhamento"> </textarea>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-12">

                                    <h4 class="card-title">Considerações Finais:*</h4>
                                    <!-- Create the editor container -->
                                    <div id="dvCentro">
                                        <textarea class="ckeditor"  id="observacao" name="c_finais"  placeholder="descreva aqui suas considerações finais sobre a usuária." required></textarea>

                                    </div>
                                </div>
                            </div>
                 
                            Campos Com (*) São Obrigatorios.
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




<!-- Modal -->
<div class="modal fade" id="exampleModalFilho" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form id="n_filhos" action="<?= base_url(); ?>Cadastro_mulher/Cadastro" method="post">
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