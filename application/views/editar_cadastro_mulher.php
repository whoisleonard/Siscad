<div class="page-wrapper">


    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
      <div class="row">
            <div class="col-md-2">
               
                <a class="btn btn-info" href="<?= base_url('Cadastro_mulher/listar_usuarias')?>" >Cancelar</a>
            </div>

        </div> 
        <!-- ============================================================== -->
        <div class="card">
            <div class="card-body wizard-content">
                <h4 class="card-title">Editar Cadastro</h4>
                <h6 class="card-subtitle"></h6>
                <form id="example-form" action="<?= base_url(); ?>Cadastro_mulher/editar_save_mulher" method="Post" class="m-t-40" enctype="multipart/form-data">
                    <div> 
 <?php foreach ($usuaria as $user) { ?>
                        <h3>Cadastro da Mulher</h3>
                        <section>
                            <input type="hidden" class="form-control" id="id" name="cod_usuaria" value="<?= $user['cod_usuaria'] ?>">
                             <input type="hidden" class="form-control" id="id" name="cod_screening" value="<?= $user['screening_cod_screening'] ?>">
                              <input type="hidden" class="form-control" id="id" name="cod_atendimento" value="<?= $user['cod_atendimento'] ?>">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="nome">Nome:*</label>                
                                    <input type="text" class="form-control" id="nome"  name="nome"  value="<?= $user['nome'] ?>" required>


                                </div>
                                <div class="form-group col-md-3">
                                    <label for="data_nascimento">Data de Nascimento:*</label>
                                    <input type="date" class="form-control" id="data_nascimento"name="data_nascimento" value="<?= $user['data_nascimento'] ?>" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Escolaridade:*</label>
                                    <select   class="select2 form-control custom-select" style="width: 100%; height:36px;" name="escola" required>
                                        <option disabled="" selected=""></option>
                                        <option value="1"<?= $user['escolaridade_cod_escolaridade']== 1 ? ' selected ' : ''; ?>>Não Alfabetizada</option>
                                        <option value="2"<?= $user['escolaridade_cod_escolaridade']== 2 ? ' selected ' : ''; ?>>1° a 4° Série</option>
                                        <option value="3"<?= $user['escolaridade_cod_escolaridade']== 3 ? ' selected ' : ''; ?>>5° a 8° Série</option>
                                        <option value="4"<?= $user['escolaridade_cod_escolaridade']== 4 ? ' selected ' : ''; ?>>Fundamental Incompleto</option>
                                        <option value="5"<?= $user['escolaridade_cod_escolaridade']== 5 ? ' selected ' : ''; ?>>Fundamental Completo</option>
                                        <option value="6"<?= $user['escolaridade_cod_escolaridade']== 6 ? ' selected ' : ''; ?>>Médio Incompleto</option>
                                        <option value="7"<?= $user['escolaridade_cod_escolaridade']== 7 ? ' selected ' : ''; ?>>Médio Completo</option>
                                        <option value="8"<?= $user['escolaridade_cod_escolaridade']== 8 ? ' selected ' : ''; ?>>Superior Incompleto</option>
                                        <option value="9"<?= $user['escolaridade_cod_escolaridade']== 9 ? ' selected ' : ''; ?>>Superior Completo</option>
                                        <option value="10"<?= $user['escolaridade_cod_escolaridade']== 10 ? ' selected ' : ''; ?>>Não Informado</option>
                                    </select> 
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="rg">RG:*</label>
                                    <input type="text" class="form-control rg-inputmask" id="rg-mask" name="rg" value="<?= $user['rg'] ?>" required>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="o_expe">Órgão Expedidor:*</label>
                                    <input type="text" class="form-control" id="o_expe" name="o_expe" value="<?= $user['orgao_expedidor'] ?>" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="cpf">CPF:*</label>
                                    <input type="text" class="form-control cpf-inputmask" id="cpf-mask" name="cpf" value="<?= $user['cpf'] ?>" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="situ_conjugal">Situação Conjugal:*</label>
                                    <select   class="select2 form-control custom-select" style="width: 100%; height:36px;" name="situ_conjugal" required>
                                        <option disabled="" selected=""></option>
                                        <option value="1"<?= $user['situacao_conjugal_cod_situacao_conjugal']== 1 ? ' selected ' : ''; ?>>Solteira</option>
                                        <option value="2"<?= $user['situacao_conjugal_cod_situacao_conjugal']== 2 ? ' selected ' : ''; ?>>Casada</option>
                                        <option value="3"<?= $user['situacao_conjugal_cod_situacao_conjugal']== 3 ? ' selected ' : ''; ?>>União Estável</option>
                                        <option value="4"<?= $user['situacao_conjugal_cod_situacao_conjugal']== 4 ? ' selected ' : ''; ?>>Viúva</option>
                                        <option value="5"<?= $user['situacao_conjugal_cod_situacao_conjugal']== 5 ? ' selected ' : ''; ?>>Separada</option>
                                        <option value="6"<?= $user['situacao_conjugal_cod_situacao_conjugal']== 6 ? ' selected ' : ''; ?>>Divorciada</option>
                                        <option value="7"<?= $user['situacao_conjugal_cod_situacao_conjugal']== 7 ? ' selected ' : ''; ?>>Não Informado</option>
                                    </select> 
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="endereco">Endereço Residencial:*</label>
                                    <input type="text" class="form-control" id="endereco" name="endereco" value="<?= $user['residencial'] ?>" required>
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="numero">Número:</label>
                                    <input type="number" class="form-control" id="numero" name="numero" value="<?= $user['numero_imovel'] ?>" required >
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="s_moradia">Situação de Moradia:*</label>
                                    <input type="text" class="form-control" id="s_moradia" name="s_moradia" value="<?= $user['situacao_moradia'] ?>" required>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="bairro">Bairro:*</label>
                                    <input type="text" class="form-control" id="bairro" name="bairro" value="<?= $user['bairro'] ?>" required>
                                </div>




                            </div>
                            <div class="row">

                                <div class="form-group col-md-3">
                                    <label for="cidade">Cidade:*</label>
                                    <input type="text" class="form-control" id="cidade" name="cidade" value="<?= $user['nome_cidade'] ?>" required >
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="estado">Estado:*</label>
                                    <input type="text" class="form-control" id="estado" name="estado" value="<?= $user['nome_estado'] ?>"required >
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="cep">CEP:</label>
                                    <input type="text" class="form-control cep-inputmask" id="cep-mask" name="cep" value="<?= $user['cep'] ?>">
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="zona">Zona:*</label>
                                    <select   class="select2 form-control custom-select" style="width: 100%; height:36px;" name="zona" required>
                                        <option disabled="" selected=""></option>
                                        <option value="urbana"<?= $user['zona']== "urbana" ? ' selected ' : ''; ?>>Zona Urbana</option>
                                        <option value="rural"<?= $user['zona']== "rural" ? ' selected ' : ''; ?>>Zona Rural</option>

                                    </select> 
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="celular">Celular:*</label>
                                    <input type="tel" class="form-control phone-inputmask" id="celular-mask" name="celular" value="<?= $user['celular'] ?>">
                                </div>



                            </div>
                            <div class="row">

                                <div class="form-group col-md-3">
                                    <label for="telefone">Telefone:</label>
                                    <input type="tel" class="form-control" id="telefone" name="telefone" value="<?= $user['telefone'] ?>">
                                </div>  
                                <div class="form-group col-md-3">
                                    <label for="o_sexual">Orientação Sexual:*</label>
                                    <select  class="select2 form-control custom-select" style="width: 100%; height:36px;" name="o_sexual" required>
                                        <option disabled="" selected=""></option>
                                        <option value="1"<?= $user['orientacao_sexual_cod_orientacao_sexual']== 1 ? ' selected ' : ''; ?>>Heterosexual</option>
                                        <option value="2"<?= $user['orientacao_sexual_cod_orientacao_sexual']== 2 ? ' selected ' : ''; ?>>Homosexual</option>
                                        <option value="3"<?= $user['orientacao_sexual_cod_orientacao_sexual']== 3 ? ' selected ' : ''; ?>>Bissexual</option>
                                        <option value="4"<?= $user['orientacao_sexual_cod_orientacao_sexual']== 4 ? ' selected ' : ''; ?>>Assexual</option>
                                        <option value="5"<?= $user['orientacao_sexual_cod_orientacao_sexual']== 5 ? ' selected ' : ''; ?>>Pansexual</option>
                                        <option value="6"<?= $user['orientacao_sexual_cod_orientacao_sexual']== 6 ? ' selected ' : ''; ?>>Transexual</option>


                                    </select> 
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="cor">Cor:*</label>
                                    <select   class="select2 form-control custom-select" style="width: 100%; height:36px;" name="cor" required>
                                        <option disabled="" selected=""></option>

                                        <option value="1"<?= $user['cor_cod_cor']== 1 ? ' selected ' : ''; ?>>Branca</option>
                                        <option value="2"<?= $user['cor_cod_cor']== 2 ? ' selected ' : ''; ?>>Preta</option>
                                        <option value="3"<?= $user['cor_cod_cor']== 3 ? ' selected ' : ''; ?>>Parda</option>
                                        <option value="4"<?= $user['cor_cod_cor']== 4 ? ' selected ' : ''; ?>>Indigena</option>
                                        <option value="5"<?= $user['cor_cod_cor']== 5 ? ' selected ' : ''; ?>>Amarela</option>
                                        <option value="6"<?= $user['cor_cod_cor']== 6 ? ' selected ' : ''; ?>>Não Informado</option>

                                    </select> 
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="genero">Renda Familiar:*</label>
                                    <select   class="select2 form-control custom-select" style="width: 100%; height:36px;" name="renda" required>
                                        <option disabled="" selected=""></option>
                                        <option value="1"<?= $user['renda_familiar_cod_renda_familiar']== 1 ? ' selected ' : ''; ?>>Menos de 1 Salário Mínimo</option>
                                        <option value="2"<?= $user['renda_familiar_cod_renda_familiar']== 2 ? ' selected ' : ''; ?>>1 Salário Minimo</option>
                                        <option value="3"<?= $user['renda_familiar_cod_renda_familiar']== 3 ? ' selected ' : ''; ?>>De 1 a 2 Salários Mínimos</option>
                                        <option value="4"<?= $user['renda_familiar_cod_renda_familiar']== 4 ? ' selected ' : ''; ?>>De 2 a 3 Salários Mínimos</option>
                                        <option value="5"<?= $user['renda_familiar_cod_renda_familiar']== 5 ? ' selected ' : ''; ?>>De 3 a 4 Salários Mínimos</option>
                                        <option value="6"<?= $user['renda_familiar_cod_renda_familiar']== 6 ? ' selected ' : ''; ?>>Mais de 4 Salários Mínimos</option>
                                        <option value="7"<?= $user['renda_familiar_cod_renda_familiar']== 7 ? ' selected ' : ''; ?>>Sem Renda</option>

                                    </select> 
                                </div>



                            </div>





                            <div class="form-group row">
                                <div class="form-group col-md-2">
                                    <label for="profi">Profissão:*</label>
                                    <select  class="select2 form-control custom-select" style="width: 100%; height:36px;" name="profi" required >
                                        <option disabled="" selected=""></option>
                                        <option value="1"<?= $user['profissao_cod_profissao']== 1 ? ' selected ' : ''; ?>>Do lar</option>
                                        <option value="2"<?= $user['profissao_cod_profissao']== 2 ? ' selected ' : ''; ?>>Estudante</option>
                                        <option value="3"<?= $user['profissao_cod_profissao']== 3 ? ' selected ' : ''; ?>>Desempregada</option>
                                        <option value="4"<?= $user['profissao_cod_profissao']== 4 ? ' selected ' : ''; ?>>Autônoma</option>
                                        <option value="5"<?= $user['profissao_cod_profissao']== 5 ? ' selected ' : ''; ?>>Vendedora</option>
                                        <option value="6"<?= $user['profissao_cod_profissao']== 6 ? ' selected ' : ''; ?>>Domestica</option>
                                        <option value="7"<?= $user['profissao_cod_profissao']== 7 ? ' selected ' : ''; ?>>Funcionária Pública</option>
                                        <option value="8"<?= $user['profissao_cod_profissao']== 8 ? ' selected ' : ''; ?>>Não Infomado</option>
                                    </select> 
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="sexo">Sexo:*</label>
                                    <select   class="select2 form-control custom-select" style="width: 100%; height:36px;" name="sexo" required>
                                        <option disabled="" selected=""></option>
                                        <option value="masculino"<?= $user['sexo']== "masculino" ? ' selected ' : ''; ?>>Masculino</option>
                                        <option value="feminino"<?= $user['sexo']== "feminino" ? ' selected ' : ''; ?>>Feminino</option>
                                        <option value="hemafrodita"<?= $user['sexo']== "hemafrodita" ? ' selected ' : ''; ?>>Hemafrodita</option>

                                    </select> 
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="religiao">Religião:*</label>
                                    <select   class="select2 form-control custom-select" style="width: 100%; height:40px;" name="religiao" required>
                                        <option disabled="" selected=""></option>
                                        <option value="1"<?= $user['religiao_cod_religiao']== 1 ? ' selected ' : ''; ?>>Católica</option>
                                        <option value="2"<?= $user['religiao_cod_religiao']== 2 ? ' selected ' : ''; ?>>Evangélica</option>
                                        <option value="3"<?= $user['religiao_cod_religiao']== 3 ? ' selected ' : ''; ?>>Espiríta</option>
                                        <option value="4"<?= $user['religiao_cod_religiao']== 4 ? ' selected ' : ''; ?>>Daimista</option>
                                        <option value="5"<?= $user['religiao_cod_religiao']== 5 ? ' selected ' : ''; ?>>Matriz Africana</option>
                                        <option value="6"<?= $user['religiao_cod_religiao']== 6 ? ' selected ' : ''; ?>>Sem Religião</option>
                                        <option value="7"<?= $user['religiao_cod_religiao']== 7 ? ' selected ' : ''; ?>>Outras</option>


                                    </select> 
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="tdocs">Tipo de Arquivo:</label>
                                    <select   class="select2 form-control custom-select" style="width: 100%; height:40px;" name="tdocs">
                                        <option disabled="" selected=""></option>
                                        <option value="1">Encaminhamento</option>
                                        <option value="2">Boletim de Ocorrência</option>
                                        <option value="3">Notificação Compulsória</option>
                                        <option value="4">Outro</option>



                                    </select> 
                                </div>

                                <div class="form-group col-md-3">                     

                                    <label>Anexar arquivo:</label>
                                    <div class="custom-file">
                                        <input type="file" class="form-control-file" name="arquivo" >
                                      
                                    </div>                    
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12">

                                    <h4 class="card-title">Historico Familiar:*</h4>
                                    <!-- Create the editor container -->
                                    <div id="dvCentro">
                                        <textarea class="ckeditor"  id="observacao" name="h_familia" placeholder="Historico familiar.." required><?= $user['historico_familiar'] ?></textarea>

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
                                        <input type="radio" class="custom-control-input" name="busca" id="expo" value="2"<?= $user['busca_pelo_servico_cod_busca_servico']== 2 ? ' checked ' : ''; ?> onclick="habilitarComo();"  >
                                        <label class="custom-control-label" for="expo">Expontânea</label>
                                    </div>
                                </div> 

                                <div class="form-group col-md-4"> 
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="busca" id="encamin" value="1"<?= $user['busca_pelo_servico_cod_busca_servico']== 1 ? ' checked ' : ''; ?> onclick="habilitarstu();" >
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
                                        <option value="1"<?= $user['como_soube_do_servico_cod_como_soube_do_servico']== 1 ? ' selected ' : ''; ?>>Portal da Prefeitura de Rio Branco, ACRE</option>
                                        <option value="2"<?= $user['como_soube_do_servico_cod_como_soube_do_servico']== 2 ? ' selected ' : ''; ?>>Redes Sociais</option>
                                        <option value="3"<?= $user['como_soube_do_servico_cod_como_soube_do_servico']== 3 ? ' selected ' : ''; ?>>Televisão</option>
                                        <option value="4"<?= $user['como_soube_do_servico_cod_como_soube_do_servico']== 4 ? ' selected ' : ''; ?>>Internet</option>
                                        <option value="5"<?= $user['como_soube_do_servico_cod_como_soube_do_servico']== 5 ? ' selected ' : ''; ?>>Amiga</option>
                                        <option value="6"<?= $user['como_soube_do_servico_cod_como_soube_do_servico']== 6 ? ' selected ' : ''; ?>>Outra</option>

                                    </select> 


                                </div>

                                <div class="form-group col-md-4" > 
                                    <label>Por Qual Instituição? </label>
                                    <select class="form-control" name="institu" id="institu" disabled>
                                        <option disabled="" selected=""></option>
                                        <option value="1"<?= $user['instituicoes_cod_instituicoes']== 1 ? ' selected ' : ''; ?>>Delegacia Especializada da Mulher (DEAM)</option>
                                        <option value="2"<?= $user['instituicoes_cod_instituicoes']== 2 ? ' selected ' : ''; ?>>Ministério Público (MP)</option>
                                        <option value="3"<?= $user['instituicoes_cod_instituicoes']== 3 ? ' selected ' : ''; ?>>Maternidade Barbara Heliodora (MBH)</option>
                                        <option value="4"<?= $user['instituicoes_cod_instituicoes']== 4 ? ' selected ' : ''; ?>>Vara da Proteção da Mulher (VPM)</option>
                                        <option value="5"<?= $user['instituicoes_cod_instituicoes']== 5 ? ' selected ' : ''; ?>>Unidade Básica de Saúde</option>
                                        <option value="6"<?= $user['instituicoes_cod_instituicoes']== 6 ? ' selected ' : ''; ?>>Secretaria Adjunta Municipal da Mulher (SEMAM)</option>
                                        <option value="7"<?= $user['instituicoes_cod_instituicoes']== 7 ? ' selected ' : ''; ?>>Secretaria Estadual da Mulher (SEPMULHERES)</option>
                                        <option value="8"<?= $user['instituicoes_cod_instituicoes']== 8 ? ' selected ' : ''; ?>>Conselho Tutelar</option>
                                        <option value="9"<?= $user['instituicoes_cod_instituicoes']== 9 ? ' selected ' : ''; ?>>Defensoria Publica Estadual</option>
                                        <option value="10"<?= $user['instituicoes_cod_instituicoes']== 10 ? ' selected ' : ''; ?>>Secretaria de Direitos Humanos Estadual</option>
                                        <option value="11"<?= $user['instituicoes_cod_instituicoes']== 11 ? ' selected ' : ''; ?>>Centro de Referência de Assistência Social (CRAS)</option>
                                        <option value="12"<?= $user['instituicoes_cod_instituicoes']== 12 ? ' selected ' : ''; ?>>Centro de Referência Especializado de Assistência</option>
                                        <option value="13"<?= $user['instituicoes_cod_instituicoes']== 13 ? ' selected ' : ''; ?>>Outra</option>
                                    </select>  

                                </div>




                            </div> <!-- fim da linha encaminhada e espotânea -->


                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="motivo">Motivo da procura:*</label>
                                    <select class="form-control" id="motivo" name="motivo" required="required">
                                        <option disabled="" selected=""></option>
                                        <option value="1"<?= $user['motivo_procura_cod_motivo_procura']== 1 ? ' selected ' : ''; ?>>Atendimento social</option>
                                        <option value="2"<?= $user['motivo_procura_cod_motivo_procura']== 2 ? ' selected ' : ''; ?>>Atendimento Psicologico</option>
                                        <option value="3"<?= $user['motivo_procura_cod_motivo_procura']== 3 ? ' selected ' : ''; ?>>Atendimento Juridico</option>
                                        <option value="4"<?= $user['motivo_procura_cod_motivo_procura']== 4 ? ' selected ' : ''; ?>>Curso</option>

                                    </select> 

                                </div><!-- fim da linha motivo da procura -->

                                <div class="form-group col-md-4" id="cursos">
                                    <label for="curso">Qual Curso:</label>
                                    <select class="form-control"  name="curso">
                                        <option enable="" selected=""></option>
                                        <option value="Culinaria"<?= $user['qual_curso']== "Culinaria" ? ' selected ' : ''; ?>>Culinaria</option>
                                        <option value="Beleza"<?= $user['qual_curso']== "Beleza" ? ' selected ' : ''; ?>>Beleza</option>
                                        <option value="Artesanato"<?= $user['qual_curso']== "Artesanato" ? ' selected ' : ''; ?>>Artesanato</option>
                                        <option value="Costura"<?= $user['qual_curso']== "Costura" ? ' selected ' : ''; ?>>Costura</option>
                                        <option value="Outro"<?= $user['qual_curso']== "Outro" ? ' selected ' : ''; ?>>Outro</option>
                                    </select>
                                </div> <!-- fim da linha cursos -->

                                <div class="form-group col-md-4" id="hora" >
                                    <label >Disponibilidade de Horário:</label><br>
                                    <div class="form-check form-check-inline">  
                                        <input class="form-check-input" type="checkbox"  id="inlineCheckbox1" name="dispo" value="Manhã"<?= $user['disponibilidade']== "Manhã" ? ' checked ' : ''; ?> >
                                        <label class="form-check-label" id="hora" for="inlineCheckbox1">Manhã</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox"  id="inlineCheckbox2" name="dispo" value="Tarde" <?= $user['disponibilidade']== "Tarde" ? ' checked ' : ''; ?> >
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
                                        <textarea class="ckeditor"  id="observacao" name="observacao"><?= $user['observacao']?></textarea>

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
                                            <input class="form-check-input" type="radio"  id="Radios1" name="vp" value="não" <?= $user['resposta_psicologica']== "não" ? ' checked ' : ''; ?> >
                                            <label class="form-check-label" for="Radios1">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"  id="Radios1"  name="vp" value="sim"<?= $user['resposta_psicologica']== "sim" ? ' checked ' : ''; ?> >
                                            <label class="form-check-label" for="Radios1">Sim </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <div class="form-group row">

                                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Por Quem?</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="fname" name="agressoP" value="<?= $user['agresso_psico'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4"> 
                                        <div class="form-group row">
                                            <label  for="fname" class="col-md-3 m-t-9">Violência:</label>
                                            <div class="col-md-7">
                                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="psicolo">
                                                    <option enable="" selected=""></option>
                                                    <option value="Violência Psicologica"<?= $user['violencia_psico']== "Violência Psicologica" ? ' selected ' : ''; ?>>Violência Psicologica</option>
                                                    <option value="Violência Física">Violência Física</option>
                                                    <option value="Violência Sexual">Violência Sexual</option>
                                                    <option value="Violência Econômica">Violência Econômica</option>
                                                    <option value="Violência Moral">Violência Moral</option>
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
                                            <input class="form-check-input" type="radio"  id="Radios3" name="vf" value="não"<?= $user['resposta_fisica']== "não" ? ' checked ' : ''; ?>>
                                            <label class="form-check-label" for="Radios3">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"  id="Radios3"  name="vf" value="sim"<?= $user['resposta_fisica']== "sim" ? ' checked ' : ''; ?>>
                                            <label class="form-check-label" for="Radios3">Sim </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <div class="form-group row">

                                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Por Quem?</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="fname" name="agressoF" value="<?= $user['agresso_fisico'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4"> 
                                        <div class="form-group row">
                                            <label  for="fname" class="col-md-3 m-t-9">Violência:</label>
                                            <div class="col-md-7">
                                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="vfisica">
                                                    <option enable="" selected=""></option>
                                                    <option value="Violência Psicologica">Violência Psicologica</option>
                                                    <option value="Violência Física"<?= $user['violencia_fisica']== "Violência Física" ? ' selected ' : ''; ?>>Violência Física</option>
                                                    <option value="Violência Sexual">Violência Sexual</option>
                                                    <option value="Violência Econômica">Violência Econômica</option>
                                                    <option value="Violência Moral">Violência Moral</option>
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
                                            <input class="form-check-input" type="radio"  id="Radios4" name="vs" value="não"<?= $user['resposta_sexual']== "não" ? ' checked ' : ''; ?>>
                                            <label class="form-check-label" for="Radios4">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"  id="Radios4"  name="vs" value="sim"<?= $user['resposta_sexual']== "sim" ? ' checked ' : ''; ?>>
                                            <label class="form-check-label" for="Radios4">Sim </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <div class="form-group row">

                                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Por Quem?</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="fname" name="agressoS" value="<?= $user['agresso_sexual'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4"> 
                                        <div class="form-group row">
                                            <label  for="fname" class="col-md-3 m-t-9">Violência:</label>
                                            <div class="col-md-7">
                                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="vsexual">
                                                    <option enable="" selected=""></option>
                                                   <option value="Violência Psicologica">Violência Psicologica</option>
                                                    <option value="Violência Física">Violência Física</option>
                                                    <option value="Violência Sexual"<?= $user['violencia_sexual']== "Violência Sexual" ? ' selected ' : ''; ?>>Violência Sexual</option>
                                                    <option value="Violência Econômica">Violência Econômica</option>
                                                    <option value="Violência Moral">Violência Moral</option>
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
                                            <input class="form-check-input" type="radio"  id="Radios5" name="ve" value="não"<?= $user['resposta_economica']== "não" ? ' checked ' : ''; ?>>
                                            <label class="form-check-label" for="Radios5">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"  id="Radios5"  name="ve" value="sim"<?= $user['resposta_economica']== "sim" ? ' checked ' : ''; ?>>
                                            <label class="form-check-label" for="Radios5">Sim </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <div class="form-group row">

                                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Por Quem?</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="fname" name="agressoE" value="<?= $user['agresso_econo'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4"> 
                                        <div class="form-group row">
                                            <label  for="fname" class="col-md-3 m-t-9">Violência:</label>
                                            <div class="col-md-7">
                                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="veconomi">
                                                    <option enable="" selected=""></option>
                                                    <option value="Violência Psicologica"<>Violência Psicologica</option>
                                                    <option value="Violência Física">Violência Física</option>
                                                    <option value="Violência Sexual">Violência Sexual</option>
                                                    <option value="Violência Econômica"<?= $user['violencia_econo']== "Violência Econômica" ? ' selected ' : ''; ?>>Violência Econômica</option>
                                                    <option value="Violência Moral">Violência Moral</option>
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
                                            <input class="form-check-input" type="radio"  id="Radios6" name="vm" value="não"<?= $user['resposta_moral']== "não" ? ' checked ' : ''; ?>>
                                            <label class="form-check-label" for="Radios6">Não</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="Radios6"  name="vm" value="sim"<?= $user['resposta_moral']== "sim" ? ' checked ' : ''; ?>>
                                            <label class="form-check-label" for="Radios6">Sim </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <div class="form-group row">

                                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Por Quem?</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="fname" name="agressoM" value="<?= $user['agresso_moral'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4"> 
                                        <div class="form-group row">
                                            <label  for="fname" class="col-md-3 m-t-9">Violência:</label>
                                            <div class="col-md-7">
                                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="vmoral">
                                                    <option enable="" selected=""></option>
                                                     <option value="Violência Psicologica">Violência Psicologica</option>
                                                    <option value="Violência Física">Violência Física</option>
                                                    <option value="Violência Sexual">Violência Sexual</option>
                                                    <option value="Violência Econômica">Violência Econômica</option>
                                                    <option value="Violência Moral"<?= $user['violencia_moral']== "Violência Moral" ? ' selected ' : ''; ?>>Violência Moral</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><!-- fim da lin -->
                                </div>
                                <br>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="NI" value="Não Informado"<?= $user['questionario']== "Não Informado" ? ' checked ' : ''; ?>>
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
                                    <input type="text" class="form-control"   id="situ_apre" name="situ_apre" value="<?= $user['situacao_apresentada']?>" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="m_utlizada">Metodologia Utilizada:*</label>
                                    <input type="text" class="form-control"   id="m_utlizada" name="m_utlizada" value="<?= $user['metodologia_utilizada']?>" required>
                                </div>
                            </div>
                            <div class="row">


                                <div class="form-group col-md-6">
                                    <label for="encaminha">Encaminhamento:</label>
                                    <textarea type="text" class="form-control" id="encaminha" name="encaminha" weight="256" value="<?= $user['encaminhamentos']?>" > </textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">

                                    <h4 class="card-title">Considerações Finais:*</h4>
                                    <!-- Create the editor container -->
                                    <div id="dvCentro">
                                        <textarea class="ckeditor"  id="observacao" name="c_finais"  placeholder="descreva aqui suas considerações finais sobre a usuária." required><?= $user['consideracoes_finais']?> </textarea>

                                    </div>
                                </div>
                            </div>

                            Campos Com (*) São Obrigatorios.
                        </section>
 <?php } ?>
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




