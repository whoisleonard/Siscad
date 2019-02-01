<div class="page-wrapper">

    <div class="container-fluid">
        
        <?php if ($this->session->flashdata('sucess') == TRUE): ?>
             <div class="alert alert-success alert-dismissible" id="myAlert">
                <a href="#" class="close">&times;</a>
                <strong> <?php echo $this->session->flashdata('sucess'); ?></strong>
            </div>
        <?php endif; ?>
            

        <?php if ($this->session->flashdata('error') == TRUE): ?>
             <div class="alert alert-success-danger">&times;</a>
                <strong> <?php echo $this->session->flashdata('error'); ?></strong>
            </div>
        <?php endif; ?>
        
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal" action="<?= base_url(); ?>usuarios/cadastrar" method="Post">
                        <div class="card-body">
                            <h4 class="card-title">Cadastrar Funcionário</h4>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group" >

                                        <label for="nome">Nome:</label>
                                        <input type="txt" class="form-control" id="nome" name="nome" placeholder=" Nome.."required>

                                    </div>
                                </div>
                              
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="cpf">CPF:</label>
                                        <input type="txt" class="form-control cpf-inputmask" id="cpf" name="cpf" placeholder="CPF.."required>
                                    </div>
                                </div>
                                
                                 <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="nascimento">Data de Nascimento:</label>
                                        <input type="date" class="form-control" id="nascimento" name="nascimento" placeholder=" Data de nascimento.."required>
                                    </div>
                                </div>

                                 <div class="col-md-2"> 
                                    <label for="funcao">Função:</label> 
                                    <select id="funcao" class="form-control"name="funcao" required>
                                        <option disabled="" selected=""></option>
                                        <option value="Assistente Social">Assistente Social</option>
                                        <option value="Advogada">Advogada</option>
                                        <option value="Psicologa">Psicologa</option>


                                    </select>

                                </div>
                                 <div class="col-md-2"> 
                                    <label for="status">Status:</label> 
                                    <select id="status" class="form-control"name="status"required>
                                        <option disabled="" selected=""></option>
                                        <option value="1">Ativo</option>
                                        <option value="2">Inativo</option>


                                    </select>

                                </div>
                           

                            </div>
                            <div class="row">
                                <div class="col-md-6">        
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail.."required>

                                    </div>
                                </div>
                                <div class="col-md-4">           
                                    <div class="form-group">
                                        <label for="senha">Senha:</label>
                                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha.."required>

                                    </div>
                                </div>
                               

                            </div>

                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-success">Cadastrar</button>
                                <button type="reset"  class="btn btn-default">Cancelar</button>
                            </div>

                        </div>
                    </form>
                </div>



            </div>

        </div>


    </div>


</div>
