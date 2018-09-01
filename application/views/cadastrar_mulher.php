<title>Casa Rosa Mulher-Cadastro</title>
<body>
 
 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
 <div id="main" class="container-fluid">
  
     <h3 class="page-header">Cadastro da Mulher</h3>
  
  <form action="cadastrar.php" method="post">
  	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder=" Digite o Nome..."required>
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" class="form-control" id="data_nascimento"name="data_nascimento" placeholder="Digite a Data de nascimento.."required>
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="idade">Idade:</label>
                <input type="text" class="form-control" id="idade" name="idade" placeholder="Digite a Idade.."required>
  	  </div>
	</div>
	
	<div class="row">
  	  <div class="form-group col-md-3">
  	  	<label for="rg">RG:</label>
                <input type="text" class="form-control" id="rg" name="rg" placeholder="Digite o RG.."required>
  	  </div>
	  <div class="form-group col-md-3">
  	  	<label for="o_expe">Órgão Expedidor:</label>
                <input type="text" class="form-control" id="o_expe" name="o_expe" placeholder="Digite o Órgão expedidor.."required>
  	  </div>
	  <div class="form-group col-md-3">
  	  	<label for="cpf">CPF</label>
                <input type="email" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF.."required>
  	  </div>
	  <div class="form-group col-md-3">
  	  	<label for="telefone">Telefone:</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Digite o Telefone"required>
  	  </div>
	</div>
	
	<div class="row">
  	  <div class="form-group col-md-6">
  	  	<label for="endereco">Endereço Residencial:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o Endereço"required>
  	  </div>
	  <div class="form-group col-md-6">
  	  	<label for="pont_referencia">Ponto de Referencia</label>
                <input type="text" class="form-control" id="pont_referencia" name="pont_referencia" placeholder="Digite o Ponto de referencia..">
  	  </div>
	</div>
	
	<div class="row">
  	  <div class="form-group col-md-6">
  	  	<label for="bairro">Bairro:</label>
                <input type="text" class="form-control" id="bairro" placeholder="Digite o Bairro"required>
  	  </div>
	  <div class="form-group col-md-2">
  	  	<label for="zona">Zona:</label>
                <select class="form-control" name="zona">
  <option value="0">-----------------------------</option>
  <option value="urbana">Zona Urbana</option>
  <option value="rural">Zona Rural</option>

</select> 
  	  </div>
	  <div class="form-group col-md-2">
  	  	<label for="cor">Cor:</label>
  	  	  <select class="form-control" name="cor">
  <option value="0">----------------------------</option>
  <option value="branca">Branca</option>
  <option value="preta">Preta</option>
   <option value="parda">Parda</option>
    <option value="indigena">Indígena</option>
     <option value="amarela">Amarela</option>
      <option value="ni">NI</option>

</select> 
  	  </div>
	  <div class="form-group col-md-2">
  	  	<label for="situ_conjugal">Situação Conjugal</label>
  	  	  <select class="form-control" name="situ_conjugal">
  <option value="0">------------------------------</option>
  <option value="solteira">Solteira</option>
  <option value="casada">Casada</option>
   <option value="uniao_estavel">União Estável</option>
    <option value="viuva">Viúva</option>
     <option value="separada">Separada</option>
     <option value="divociada">Divociada</option>
      <option value="ni">NI</option>

</select> 
  	  </div>
          
	</div>
	
	<div class="row">
  	  <div class="form-group col-md-2">
  	  	  	  	<label for="genero">Gênero</label>
  	  	  <select class="form-control" name="genero">
  <option value="0">------------------------------</option>
  <option value="female">Feminino</option>
  <option value="male">Masculino</option>
   <option value="hfrodita">Hemafroditas</option>
      <option value="ni">NI</option>

</select> 
  	  </div>
	  <div class="form-group col-md-2">
  	  	<label for="o_sexual">Orientação Sexual</label>
  	  	  <select class="form-control" name="o_sexual">
  <option value="0">--------------------------</option>
  <option value="ht">Heterossexual</option>
  <option value="hm">Homossexual</option>
   <option value="bi">Bissexuais</option>
     <option value="asse">Assexuais</option>
       <option value="pan">Panssexuais</option>
      <option value="ni">NI</option>

</select> 
  	  </div>
            
              <div class="form-group col-md-5">
  	  	<label for="id_sexual">Identidade Sexual:</label>
                <input type="text" class="form-control" id="id_sexual" name="id_sexual" placeholder="Identidade sexual..">
  	  </div>
            
             <div class="form-group col-md-3">
  	  	<label for="religiao">Religião</label>
  	  	  <select class="form-control" name="religiao">
  <option value="0">--------------------------</option>
  <option value="1">Católica</option>
  <option value="2">Evangélica</option>
   <option value="3">Espirita</option>
     <option value="4">Daimista</option>
       <option value="5">Matriz Africana</option>
      <option value="ni">NI</option>

</select> 
  	  </div>
	</div>
     
	
             <fieldset>
    <legend>Escolaridade:</legend>
     <input type="radio" name="escola" value="1" checked/>Não Alfabetizada
<input type="radio" name="escola" value="2" /> 1º a 4º
<input type="radio" name="escola" value="3" /> 5º a 8º
<input type="radio" name="escola" value="4" /> Fundamental Completo
<input type="radio" name="escola" value="5" /> Médio Incompleto
<input type="radio" name="escola" value="6" /> Médio Completo
<input type="radio" name="escola" value="7" /> Superior
<input type="radio" name="escola" value="8" /> NI
             </fieldset>
 
      </div>
	<hr />
	
	<div class="row">
	  <div class="col-md-12">
	  	<button type="submit" class="btn btn-success">Salvar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
               	<a href="<?= base_url();?>Busca_servico" class="btn btn-primary">Proxima</a>
		
	  </div>
	</div>

  </form>
 </div>
 </main>

 
