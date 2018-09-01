<!DOCTYPE html>
<title>Casa Rosa Mulher-Cadastro</title>
<body>
    
 <br>
 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
 <div id="main" class="container-fluid">
  
  <h3 class="page-header">Busca Pelo Serviço</h3>
  
  <form action="cadastrar.php" method="post">
  	<div class="row">
 <div class="form-group col-md-3">
  	  	<label for="encaminhada">Encaminhada:</label>
                <select class="form-control" name="zona">
  <option value="0">-----------------</option>
  <option value="sim">Sim</option>
  <option value="nao">Não</option>

</select> 
  	  </div>
            <div class="form-group col-md-9">
  	  	<label for="data_nascimento">Por qual Instituição?:</label>
                <input type="text" class="form-control" id="data_nascimento"name="data_nascimento" placeholder="Digite a Data de nascimento.."required>
  	  </div>
	 
	 
	</div>
	
	<div class="row">
  	   <div class="form-group col-md-3">
  	  	<label for="espontanea">Espontânea:</label>
                <select class="form-control" name="espontanea">
  <option value="0">-----------------</option>
  <option value="sim">Sim</option>
  <option value="nao">Não</option>

</select> 
  	  </div>
	  <div class="form-group col-md-9">
  	  	<label for="como_servico">Como Soube do Serviço?</label>
                <input type="text" class="form-control" id="o_expe" name="como_servico" placeholder="Digite o Como soube..">
  	  </div>
	
	</div>
	
	<div class="row">
  	  <div class="form-group col-md-3">
  	  	<label for="motivo">Motivo da procura:</label>
                <select class="form-control" name="motivo">
  <option value="0">-----------------------------</option>
  <option value="1">Atendimento Social</option>
  <option value="2">Atendimento Psicológico</option>
  <option value="3">Atendimento Jurídico</option>

</select> 
	  
	</div>
	<div class="form-group col-md-9">
  	  	<label for="curso">Curso:</label>
                <input type="text" class="form-control" id="tcurso" name="curso" placeholder="Digite o Nome do Curso..">
  	  </div>
        </div>
	<div class="row">
  	  
	  <div class="form-group col-md-6">
  	  	<label for="dispon">Disponibilidade de Horário:</label>
  	  	<input type="checkbox" name="dispo" value="manha" /> Manhã
                <input type="checkbox" name="dispo" value="tarde" /> Tarde
  	  </div>
	</div>
	
	<hr />
	
	<div class="row">
	  <div class="col-md-12">
	  	<button type="submit" class="btn btn-success">Salvar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
	<a href="<?= base_url();?>usuarios/cadastro_mulher" class="btn btn-primary">Anterior</a>
        	<a href="<?= base_url();?>Screening" class="btn btn-primary">Proxima</a>
	  </div>
	</div>

  </form>
 </div>
 </main>

 