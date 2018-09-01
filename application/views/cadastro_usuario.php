<title>Casa Rosa Mulher-Cadastro de Usuário</title>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="col-md-12">
        <h1 class="page-header">Novo Usuário</h1>
    </div>

    <div class="col-md-12">
        <form action="<?= base_url();?>usuarios/cadastrar" method="Post">
            <div class="form-group" >
                <label for="exampleInputEmail1">Nome:</label>
                <input type="txt" class="form-control" id="nome" name="nome" placeholder="Informe o Nome.."required>

            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">CPF:</label>
                        <input type="txt" class="form-control" id="cpf" name="cpf" placeholder="Informe seu CPF.."required>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Endereço:</label>
                        <input type="txt" class="form-control" id="endereco" name="endereco" placeholder="Informe seu Endereço.."required>
                    </div>
                </div>
                <div class="col-md-2"> 
                    <label for="exampleInputEmail1">Nivel:</label> 
                    <select id="nivel" class="form-control"name="nivel">
                        <option value="0">---</option>
                         <option value="1">Administrador</option>
                          <option value="2">Usuário</option>
                        
                        
                    </select>
                    
                </div>
                 
            </div>
            <div class="row">
                <div class="col-md-6">        
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Informe seu email.."required>

                    </div>
                </div>
                <div class="col-md-4">           
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha:</label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="informe uma senha.."required>
                        
                    </div>
                </div>
               <div class="col-md-2"> 
                    <label for="exampleInputEmail1">Status:</label> 
                    <select id="status" class="form-control"name="status"required>
                        <option value="0">---</option>
                         <option value="1">Ativo</option>
                          <option value="2">Inativo</option>
                        
                        
                    </select>
                    
                </div>

            </div>
            <div style="text-align: right">
            <button type="submit" class="btn btn-success">Cadastrar</button>
            <button type="reset" class="btn btn-default">Cancelar</button>
            </div>
        </form>
    </div>

</div>

</main>

