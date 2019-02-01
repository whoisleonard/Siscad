<html><head>
<style>
table {
	font-family: sans-serif;
	border: 7mm solid aqua;
	border-collapse: collapse;
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
</head>
<body>

    <h1 style=" color: black">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Relatório Quantitativo</h1>
    <h2 style=" color: black">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
        Casa Rosa Mulher</h2>

    <br><br><br>



  
<table style="border:  5px inset gray; ">
<tr>
<td style="border: 5px solid ghostwhite">Idade</td>

<td style="border: 0px none black"></td>

<td style="border: 5px double ghostwhite">Quantidade</td>
</tr>
<tr>
<th> Menor de 18</th>

<th></th>

<th> <?= $menor18 ?></th>
</tr>
<tr>
<th>18 a 25 </th>

<th></th>

<th><?= $maior18 ?></th>
</tr>
<tr>
<th>26 a 40 </th>
<th></th>
<th><?= $maior26 ?></th>
</tr>
<tr>
<th>Maior de 40  </th>
<th></th>
<th><?= $maior40 ?></th>
</tr>

</table>


<table style="border:  5px inset gray; ">
<tr>
<td style="border: 5px solid ghostwhite">Escolaridade</td>

<td style="border: 0px none black"></td>

<td style="border: 5px double ghostwhite">Quantidade</td>
</tr>
<tr>
<th>Não Alfabetizado</th>

<th></th>

<th><?= $anafal ?></th>
</tr>
<tr>
<th>Fundamental Incompleto</th>

<th></th>

<th><?= $fundi ?></th>
</tr>
<tr>
<th>Fundamental Completo</th>
<th></th>
<th> <?= $fundc ?></th>
</tr>
<tr>
<th>Médio Incompleto </th>
<th></th>
<th> <?= $medin ?></th>
</tr>
<tr>
<th>Médio Completo  </th>
<th></th>
<th><?= $medic ?></th>
</tr>
<tr>
<th>Superior </th>
<th></th>
<th><?= $supic ?></th>
</tr>
<tr>
<th>Não Informado</th>
<th></th>
<th><?= $ni ?></th>
</tr>

</table>

  
<table style="border:  5px inset gray; ">
<tr>
<td style="border: 5px solid ghostwhite">Renda</td>

<td style="border: 0px none black"></td>

<td style="border: 5px double ghostwhite">Quantidade</td>
</tr>
<tr>
<th>Menos De 01 Salário Mínimo</th>

<th></th>

<th> <?= $rm1 ?></th>
</tr>
<tr>
<th>1 Salário Mínimo</th>

<th></th>

<th> <?= $rda1 ?></th>
</tr>
<tr>
<th>De 01 A 02 Salário Mínimos </th>
<th></th>
<th> <?= $rda1a2 ?></th>
</tr>
<tr>
<th>02 A 03 Salário Mínimos </th>
<th></th>
<th> <?= $rda2a3 ?></th>
</tr>
<tr>
<th>03 A 04 Salário Mínimos</th>
<th></th>
<th><?= $rda3a4 ?></th>
</tr>
<tr>
<th>Mais de 4 Salário Mínimos </th>
<th></th>
<th><?= $rda4 ?></th>
</tr>
<tr>
<th>Sem Renda  </th>
<th></th>
<th> <?= $rdasem ?></th>
</tr>
</table>

<table style="border:  5px inset gray; ">
<tr>
<td style="border: 5px solid ghostwhite">Tipos de Serviços</td>

<td style="border: 0px none black"></td>

<td style="border: 5px double ghostwhite">Quantidade</td>
</tr>
<tr>
<th>Cursos Proficionalizantes</th>

<th></th>

<th><?= $curso ?></th>
</tr>
<tr>
<th>Atendimento Social </th>

<th></th>

<th><?= $social ?></th>
</tr>
<tr>
<th>Atendimento Psicologico</th>
<th></th>
<th><?= $psicologico ?></th>
</tr>
<tr>
<th>Atendimento Juridico</th>
<th></th>
<th><?= $juridico ?></th>
</tr>

</table>
    
<table style="border:  5px inset gray; ">
<tr>
<td style="border: 5px solid ghostwhite">Tipos de Violência</td>

<td style="border: 0px none black"></td>

<td style="border: 5px double ghostwhite">Quantidade</td>
</tr>
<tr>
<th>Violência Psicologica</th>

<th></th>

<th><?= $psico ?></th>
</tr>
<tr>
<th>Violência Fisica  </th>

<th></th>

<th> <?= $fisica ?></th>
</tr>
<tr>
<th>Violência Sexual </th>
<th></th>
<th> <?= $sexual ?></th>
</tr>
<tr>
<th>Violência Moral</th>
<th></th>
<th> <?= $moral ?></th>
</tr>
<tr>
<th>Violência Econômica </th>
<th></th>
<th> <?= $econo ?></th>
</tr>
</table>
    

<table style="border:  5px inset gray; ">
<tr>
<td style="border: 5px solid ghostwhite">Religião</td>

<td style="border: 0px none black"></td>

<td style="border: 5px double ghostwhite">Quantidade</td>
</tr>
<tr>
<th>Católica </th>

<th></th>

<th> <?= $catolica ?></th>
</tr>
<tr>
<th>Evangélica  </th>

<th></th>

<th> <?= $evangel ?></th>
</tr>
<tr>
<th>Espírita </th>
<th></th>
<th> <?= $espirita ?></th>
</tr>
<tr>
<th>Matriz Africana</th>
<th></th>
<th><?= $matriz ?></th>
</tr>
<tr>
<th>Daimista</th>
<th></th>
<th><?= $daimista ?></th>
</tr>
<tr>
<th>Sem Religião</th>
<th></th>
<th> <?= $sem ?></th>
<tr>
<th>Outras </th>
<th></th>
<th><?= $outras ?></th>
</tr>
</tr>
</table>
    
<table style="border:  5px inset gray; ">
<tr>
<td style="border: 5px solid ghostwhite">Cor</td>

<td style="border: 0px none black"></td>

<td style="border: 5px double ghostwhite">Quantidade</td>
</tr>
<tr>
<th>Branca </th>

<th></th>

<th> <?= $branca ?></th>
</tr>
<tr>
<th>Parda  </th>

<th></th>

<th><?= $parda ?></th>
</tr>
<tr>
<th>Preta </th>
<th></th>
<th> <?= $preta ?></th>
</tr>
<tr>
<th>Amarela</th>
<th></th>
<th><?= $amarela ?></th>
</tr>
<tr>
<th>Indigina   </th>
<th></th>
<th> <?= $indigena ?></th>
</tr>
<tr>
<th>Não Informado </th>
<th></th>
<th><?= $NI ?></th>
</tr>
</table>
    
</body>
</html>