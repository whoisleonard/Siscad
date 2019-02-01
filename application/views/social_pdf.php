<!DOCTYPE html>
<html>

<head>
 <title>   Relátorio   </title>
</head>


<body>
    
    <style>
table {
	font-family: sans-serif;
	border: 7mm solid aqua;
	border-collapse: collapse;
        margin: auto;
}
table.table2 {
	border: 2mm solid aqua;
	border-collapse: collapse;
}
table.layout {
	border: 0mm solid black;
	border-collapse: collapse;
}
td.layout {
	text-align: center;
	border: 0mm solid black;
}
td {
	padding: 3mm;
	border: 2mm solid blue;
	vertical-align: middle;
}
td.redcell {
	border: 3mm solid red;
}
td.redcell2 {
	border: 2mm solid red;
}
</style>
     <h1 style=" color: black">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Relatório Social</h1>
    <h2 style=" color: black">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
        Casa Rosa Mulher</h2>
     <br><br><br>
          Salientamos que todas as informações expostas neste relatório é de inteira responsabilidade da usuária abaixo citada, tendo em vista seus
     relatos durante a entrevista junto a técnica de Serviço social nesta Instituição.
    
    <br><br><br>
    <?php foreach ($mulher as $user) : ?>
        
        <form>
     
            <fieldset>
                  <legend><h4><b>Identificação da Usuária</b></h4></legend>
              <p>ID:  <b><?= $user['cod_usuaria'] ?></b>  Nome: <b><?= $user['nome'] ?></b>  Data de Nascimento: <b><?= date("d/m/Y", strtotime($user['data_nascimento'])) ?> </b>
               RG:  <b><?= $user['rg']; ?></b>  CPF: <b><?= $user['cpf'] ?></b>  Órgão Expedidor: <b><?= $user['orgao_expedidor'] ?></b>  Escolaridade: <b><?= $user['descricao_escol'] ?> </b>
              Cor: <b><?= $user['descricao_cor'] ?></b>  Situação Conjugal: <b><?= $user['descricao_conjugal'] ?></b>  Celular:   <b><?= $user['celular']; ?></b> 
              Endereço Residencial:  <b><?= $user['residencial'] ?></b> Número: <b><?= $user['numero_imovel'] ?></b>  Bairro:   <b><?= $user['bairro'] ?></b> 
              Cidade: <b><?= $user['nome_cidade'] ?></b>  Estado:  <b><?= $user['nome_estado'] ?></b>  CEP: <b><?= $user['cep'] ?></b>  Zona:  <b><?= $user['zona'] ?></b>
              
              </p>
           
              </fieldset>
            <br><br>
       
              <hr>
                 <h4><b>Procedência do Caso</b></h4>
            
           
            <p> <?= $user['descricao_busca'] ?>, <?= $user['descricao_como'] ?>, <?= $user['nome_institu'] ?></p>
           
            
            <hr>
            <h4><b>Metodologia Utilizada</b></h4>
             
           
            <p><?= $user['metodologia_utilizada'] ?></p>
            
            <hr>
            
            <h4><b>Histórico Familiar</b></h4>
             
           
            <p><?= $user['historico_familiar'] ?></p>
            
            <hr>
           
            
            <h4><b>Situação Sócio-Econômica</b></h4>
             
           
            <p>Profissão: <b><?= $user['descricao_p'] ?></b></p>  <p>Renda Familiar: <b><?= $user['descricao_renda'] ?></b></p>
            
            <hr>
            
            <h4><b>Situação Escolar</b></h4>
             
           
            <p><?= $user['descricao_escol'] ?></p>  
            
            <hr>
             <h4><b>Situação de Moradia</b></h4>
             
           
            <p><?= $user['situacao_moradia'] ?></p>  
            
            <hr>
            <h4><b>Considerações Finais</b></h4>
           
            <p><?= $user['consideracoes_finais']; ?></p>
            <br /><br />

        </form>
    <?php endforeach; ?>