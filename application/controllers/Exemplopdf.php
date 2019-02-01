<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exemplopdf extends CI_Controller {

    public function relatorio_social() {
        $this->load->model("Cadastro_mulher_model");
        $termo = $this->input->post('namecpf');
        $mulher = $this->Cadastro_mulher_model->buscandoMulher($termo);
        $mpdf = new \Mpdf\Mpdf();


        $mpdf->setDisplayMode("fullpage");

        $mpdf->WriteHTML("<h1><center>Relátorio Social</center></h1><hr>");


        $html = "<table>
                                  <thead>
                                    <tr>
                                      <th>ID</th>
                                      <th>Nome:</th>
                                      <th>Data de Nascimento:</th>
                                      <th>RG:</th>
                                      <th>Órgão Expedidor:</th>
                                      <th>CPF:</th>
                                      <th>Celular:</th>
                                      <th>Situação Conjugal:</th>
                                      <th>Endereço Residencial:</th>
                                      <th>Número:</th>
                                      <th>Bairro:</th>
                                    </tr>
                
                                  </thead>";
        foreach ($mulher as $mulher) {
            $html = $html . "  <tbody>
                                    <tr>
                                      <th>{$mulher['cod_usuaria']}</th>
                                      <td>{$mulher['nome']}</td>
                                      <td>{$mulher['data_nascimento']}</td>
                                      <td>{$mulher['rg']}</td>
                                      <th>{$mulher['orgao_expedidor']}</th>
                                      <td>{$mulher['cpf']}</td>
                                      <td>{$mulher['celular']}</td>
                                      <td>{$mulher['descricao_conjugal']}</td>
                                      <th>{$mulher['residencial']}</th>
                                      <td>{$mulher['numero_imovel']}</td>
                                      <td>{$mulher['bairro']}</td>
                                     
                                    </tr>
                                    
                                  </tbody>";
        }
        $html = $html . "  </table>";


        $mpdf->WriteHTML($html);


        $mpdf->Output();
        exit();
    }

    public function relatorio_informativo() {
     
     
        
        $mpdf = new \Mpdf\Mpdf();

   //   $data['mulher'] = $this->Cadastro_mulher_model->buscandoMulher($termo); 
     
        $mpdf->setDisplayMode("fullpage");

        $mpdf->WriteHTML("<h1><center>Relátorio Informativo</center></h1><hr>");


        $html = $this->load->view('relatorio_informativo', [], true);


$mpdf->WriteHTML($html);


$mpdf->Output();
exit();

}  


}
