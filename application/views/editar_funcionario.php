<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">

        </div>
    </div>


    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form action="<?= base_url(); ?>usuarios/editar_save" method="Post">
                        <div class="card-body">
                            <h4 class="card-title">Atualizar Funcionario</h4>
                            <div class="row"><!-- inicio da row -->
                                <input type="hidden" class="form-control" id="id" name="cod_login" value="<?= $login[0]->cod_login ?>">
                                <div class="col-md-10">
                                    <div class="form-group" >

                                        <label for="nome">Nome:</label>
                                        <input type="txt" class="form-control" id="nome" name="nome" value="<?= $login[0]->nome ?>"  required>

                                    </div>
                                </div>
                                
                            </div><!-- fim da row -->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="cpf">CPF:</label>
                                        <input type="txt" class="form-control" id="cpf" name="cpf"value="<?= $login[0]->cpf ?>" required>
                                    </div>
                                </div>
                                
                                 <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="nascimento">Data de Nascimento:</label>
                                        <input type="date" class="form-control" id="nascimento" name="nascimento" value="<?= $login[0]->data_nascimento ?>"required>
                                    </div>
                                </div>
                                <div class="col-md-2"> 
                                    <label for="funcao">Função:</label> 
                                    <select id="funcao" class="form-control"name="funcao"  required>
                                        <option disabled="" selected=""></option>
                                        <option value="Assistente Social"<?= $login[0]->funcao == "Assistente Social" ? ' selected ' : ''; ?>>Assistente Social</option>
                                        <option value="Advogada"<?= $login[0]->funcao == "Advogada" ? ' selected ' : ''; ?>>Advogada</option>
                                        <option value="Psicologa"<?= $login[0]->funcao == "Psicologa" ? ' selected ' : ''; ?>>Psicologa</option>


                                    </select>

                                </div>  
                                 <div class="col-md-2"> 
                                    <label for="status">Status:</label> 
                                    <select id="status" class="form-control" name="status"  required>
                                        <option disabled="" selected=""></option>
                                        <option value="1"<?= $login[0]->status == 1 ? ' selected ' : ''; ?>>Ativo</option>
                                        <option value="2"<?= $login[0]->status == 2 ? ' selected ' : ''; ?>>Inativo</option>


                                    </select>

                                </div>
                            </div> <!-- fim da row -->
                            
                            <!-- inicio da row -->
                            <div class="row">
                                <div class="col-md-6">        
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" name="email"value="<?= $login[0]->email ?>" required>

                                    </div>
                                </div>
                                <div class="col-md-4">           
                                    <div class="form-group">
                                        <label for="senha">Senha:</label>
                                        <input type="button" class="form-control" id="senha" name="senha"  value="Atualizar Senha" data-toggle="modal" data-target="#myModal">

                                    </div>
                                </div>
                               

                            </div><!-- fim da row -->

                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-danger">Atualizar</button>
                                <a type="button" href="<?= base_url(); ?>usuarios"  class="btn btn-default">Cancelar</a>
                            </div>

                        </div>
                    </form>
                </div>



            </div>

        </div>


    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form action="<?= base_url(); ?>Usuarios/salvar_senha" method="post">
            <input type="hidden" id="id" name="cod_login" value="<?= $login[0]->cod_login; ?>">
            <div class="modal-content">
                <div class="modal-header">
                  <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
                    <h4 class="modal-title" id="myModalLabel">Atualizar Senha</h4>
                </div>
                <div class="modal-body">         
                    <div class="col-md-12 form-group">
                        <label for="senha_antiga">Senha Antiga</label>
                        <input type="password" name='senha_antiga' id="senha_antiga" class="form-control">
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="senha_nova">Nova Senha</label>
                        <input type="password" name='senha_nova' id="senha_nova" onkeyup="checarSenha()" class="form-control">
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="senha_confirmar">Confirmar Senha</label>
                        <input type="password" name='senha_confirmar' id="senha_confirmar" onkeyup="checarSenha()" class="form-control">
                    </div>
                    <div class="col-md-12 form-group">
                        <div id="divcheck">                      
                        </div>
                    </div>          
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success" id="enviarsenha" disabled>Salvar</button>
                </div>
            </div>
        </form>      
    </div>
</div>


<script>
    $(document).ready(function () {
        $("#senha_nova").keyup(checkPasswordMatch);
        $("#senha_confirmar").keyup(checkPasswordMatch);
    });
    function checarSenha() {
        var password = $("#senha_nova").val();
        var confirmPassword = $("#senha_confirmar").val();
        if (password == '' || '' == confirmPassword) {
            $("#divcheck").html("<span style='color: red'>Campo de senha vazio!</span>");
            document.getElementById("enviarsenha").disabled = true;
        } else if (password != confirmPassword) {
            $("#divcheck").html("<span style='color: red'>Senhas não conferem!</span>");
            document.getElementById("enviarsenha").disabled = true;
        } else {
            $("#divcheck").html("<span style='color: green'>Senhas iguais!</span>");
            document.getElementById("enviarsenha").disabled = false;
        }
    }
</script>

