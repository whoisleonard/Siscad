   <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
          
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
                        <form id="example-form" action="Cadastro_mulher/cadastrar_mulher" method="Post" class="m-t-40">
                            <div>
                                <h3>Cadastro da Mulher</h3>
                                <section>
                                  
    <div class="row">
      <div class="form-group col-md-5">
        <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder=" Digite o Nome..."required>
      </div>
      <div class="form-group col-md-4">
        <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" class="form-control" id="data_nascimento"name="data_nascimento" placeholder="Digite a Data de nascimento.."required>
      </div>
            <div class="form-group col-md-3">
        <label for="religiao">Escolaridade</label>
          <select class="form-control" name="religiao">
   <option disabled="" selected=""></option>
  <option value="1">Não Alfabetizada</option>
  <option value="2">1º a 4º</option>
   <option value="3">5º a 8º</option>
     <option value="4">Fundamental Completo</option>
       <option value="5">Médio Imcompleto</option>
        <option value="6">Médio Completo</option>
         <option value="7">Superior</option>
      <option value="8">Não Informado</option>

</select> 
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
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF.."required>
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
   <option disabled="" selected=""></option>
  <option value="urbana">Zona Urbana</option>
  <option value="rural">Zona Rural</option>

</select> 
      </div>
      <div class="form-group col-md-2">
        <label for="cor">Cor:</label>
          <select class="form-control" name="cor">
   <option disabled="" selected=""></option>
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
  <option disabled="" selected=""></option>
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
  <option disabled="" selected=""></option>
  <option value="female">Feminino</option>
  <option value="male">Masculino</option>
   <option value="hfrodita">Hemafroditas</option>
      <option value="ni">NI</option>

</select> 
      </div>
      <div class="form-group col-md-2">
        <label for="o_sexual">Orientação Sexual</label>
          <select class="form-control" name="o_sexual">
 <option disabled="" selected=""></option>
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
   <option disabled="" selected=""></option>
  <option value="1">Católica</option>
  <option value="2">Evangélica</option>
   <option value="3">Espirita</option>
     <option value="4">Daimista</option>
       <option value="5">Matriz Africana</option>
      <option value="ni">NI</option>

</select> 
      </div>
    </div>
     
    
                                    


    <hr />
    
   
    
</section>


                                
                                <h3>Busca Pelo Serviço</h3>
                                <section>
                                  <div class="row">
 <div class="form-group col-md-12">
         <label>Encaminhada  Por Qual Instituição?</label>                           
  <div class="input-group-prepend">
    <div class="input-group-text">
      <input type="checkbox" name="encaminhada" id="encamin" size="86" maxlength="255" aria-label="Checkbox for following text input" onchange="habilitar()">
          <label></label>
     <input type="text" name="institu" id="institu" class="form-control" size="87" maxlength="255"   aria-label="Text input with checkbox" disabled>
    </div>
  </div>
      </div>
    
    </div>
    
    <div class="row">
       <div class="form-group col-md-12">
                <label>Espôntanea  Como Soube do Serviço?</label>                           
  <div class="input-group-prepend">
    <div class="input-group-text">
      <input type="checkbox" name="espontanea" id="espon" size="70" maxlength="255" aria-label="Checkbox for following text input" onchange="ativar()">
          <label></label>
  <input type="text" name="como" id="como" class="form-control" size="70" maxlength="255" aria-label="Text input with checkbox" disabled>
    </div>
  </div>
      </div>
    </div>
    
    <div class="row">
      <div class="form-group col-md-3">
        <label for="motivo">Motivo da procura:</label>
                <select class="form-control" name="motivo">
   <option disabled="" selected=""></option>
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
        <input type="checkbox" name="dispo" value="m" /> Manhã
                <input type="checkbox" name="dispo" value="t" /> Tarde
      </div>
    </div>
    
    <hr/>
    
    
                                </section>
                           
                                <h3>Screening de Rotina</h3>
                                <section>
                                     <fieldset>
    <label>-Você já se sentiu humilhada, intimidada, amedrontada, ameaçada, diminuida, acuada por uma pessoa importante para você(seu parceiro/a,pai/mãe,tio,irmão)?(Violência Psicológica)</label>
    <input type="radio" name="vp" value="vp1" /> Não<br>
    <input type="radio" name="vp" value="vp2" /> Sim 
  </fieldset>
            
            <br>
            
            <fieldset>
    <label>-Alguém próximo a você lhê bate ou ja bateu? Ou Alguém importante para você lhe agrediu fisicamente(seu parceiro/a,pai/mãe,tio,irmão)?(Violência Física)</label>
     <input type="radio" name="vf" value="vf1" /> Não<br>
    <input type="radio" name="vf" value="vf2" /> Sim 
  </fieldset>
            
               <br>
               
            <fieldset>
    <label>-Você já se sentiu forçada a ter relações sexuais com alguém? (Violência Sexual)</label>
     <input type="radio" name="vs" value="vs1" /> Não<br>
    <input type="radio" name="vs" value="vs2" /> Sim 
  </fieldset>
               <br>
               
            <fieldset>
    <label>Você já teve algum objeto pessoal, da sua casa ou instrumento de trabalho danificado ou subtraido por alguma pessoa próxima a você? (Violência Econômica)</label>
    <input type="radio" name="ve" value="ve1" /> Não<br>
    <input type="radio" name="ve" value="ve2" /> Sim 
  </fieldset>
               <br>
               
            <fieldset>
    <label>Você já se sentiu ofendida por uma pessoa próxima ter te difamado, injuriado e ou caluniado? (Violência Moral)</label>
     <input type="radio" name="vm" value="vm1" /> Não<br>
    <input type="radio" name="vm" value="vm2" /> Sim 
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
        <!-- ============================================================== -->
<script>
 function habilitar(){
        if(document.getElementById('encamin').checked){
            document.getElementById('institu').removeAttribute("disabled");
        }
        else {
            document.getElementById('institu').value=''; //Evita que o usuário defina um texto e desabilite o campo após realiza-lo
            document.getElementById('institu').setAttribute("disabled", "disabled");
            
        } 
    }
    </script>
    
    <script>
        function ativar(){
        if(document.getElementById('espon').checked){
            document.getElementById('como').removeAttribute("disabled");
        }else {
            document.getElementById('como').value=''; //Evita que o usuário defina um texto e desabilite o campo após realiza-lo
            document.getElementById('como').setAttribute("disabled", "disabled");
        }
    }
    </script>