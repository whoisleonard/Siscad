<title>Casa Rosa Mulher-Cadastro</title>
<body>
 
 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
 <div id="main" class="container-fluid">
  
     <h3 class="page-header">"SCREENING" DE ROTINA PARA INDENTIFICAÇÃO DOS TIPOS DE VIOLÊNCIA</h3>
  
 
	<form action="test.php" method="post">
  <fieldset>
    <legend>-Você já se sentiu humilhada, intimidada, amedrontada, ameaçada, diminuida, acuada por uma pessoa importante para você(seu parceiro/a,pai/mãe,tio,irmão)?(Violência Psicológica)</legend>
    <input type="radio" name="vp" value="vp1" /> Não<br>
    <input type="radio" name="vp" value="vp2" /> Sim 
  </fieldset>
            
            <br>
            
            <fieldset>
    <legend>-Alguém próximo a você lhê bate ou ja bateu? Ou Alguém importante para você lhe agrediu fisicamente(seu parceiro/a,pai/mãe,tio,irmão)?(Violência Física)</legend>
     <input type="radio" name="vf" value="vf1" /> Não<br>
    <input type="radio" name="vf" value="vf2" /> Sim 
  </fieldset>
            
               <br>
               
            <fieldset>
    <legend>-Você já se sentiu forçada a ter relações sexuais com alguém? (Violência Sexual)</legend>
     <input type="radio" name="vs" value="vs1" /> Não<br>
    <input type="radio" name="vs" value="vs2" /> Sim 
  </fieldset>
               <br>
               
            <fieldset>
    <legend>Você já teve algum objeto pessoal, da sua casa ou instrumento de trabalho danificado ou subtraido por alguma pessoa próxima a você? (Violência Econômica)</legend>
    <input type="radio" name="ve" value="ve1" /> Não<br>
    <input type="radio" name="ve" value="ve2" /> Sim 
  </fieldset>
               <br>
               
            <fieldset>
    <legend>Você já se sentiu ofendida por uma pessoa próxima ter te difamado, injuriado e ou caluniado? (Violência Moral)</legend>
     <input type="radio" name="vm" value="vm1" /> Não<br>
    <input type="radio" name="vm" value="vm2" /> Sim 
  </fieldset>
            <br><br>
	<div class="row">
	  <div class="col-md-12">
	  	<button type="submit" class="btn btn-success">Salvar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
               	<a href="<?= base_url();?>usuarios/servico" class="btn btn-primary">Proxima</a>
		
	  </div>
	</div>

  </form>
 </div>
 </main>