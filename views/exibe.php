<?php

require_once '../controllers/orientacaoObjeto.php';

$filiais = [
  'Adamantina' => [
      "ANA RITA DE CASSIA SILVA OLIVEIRA", 
      "CARLINDO SANTOS ARAUJO",
      "VANGELI SANDRA FEITOZA RAMOS",
      "JOSE EDIMILSON PEREIRA",
      "GILMARA ARAUJO SANTANA",
      "IBERTO GALDINO NUNES",
      "HELENICE FELICIANO MANFRE",
  ],
  'Borborema' => [
      "LUCAS CASTILHO LOPES",
      "SILVANA BROETTO BERTOLDO",
      "RONALDO liIAGO MACHADO GUIMARAES",
      "GISELIA MARIA DA CONCEICAO",
      "HUGO SILVESTRE DE ANDRADE",
      "RAFAEL DA SILVA MARQUES PEREIRA",
      "LUZIA DE MATTOS",
      "LEIDIANE GONCALVES DA SILVA",
      "ADRIANO CARDOSO LYRA",
      "CELINO FERREIRA DA SILVA"	,
      "LISA HELENA MINITTI ESTEVAM PAOLUCCI",
      "HELENA MARIA ALVES MANFRE",
      "JOSE GERALDO CAMARGO PEREIRA",
      "ADRIANO ROQUE DE OLIVEIRA",
      "PEDRO CEZAR MARTENDAL",
      "ELISANGELA BARBOSA TILLER",
      "LEILANE DOS SANTOS OLIVEIRA",
      "ALESSANDRA DANIELE MESQUITA",
      "SELMA APARECIDA DE OLIVEIRA",
      "IONICA DA SILVA VIEIRA",
      "GUSTAVO CARPES POSSAMAI",
  ],
  'Cajamar' => [
      "OSVALDO FONSECA",
      "LUCIENI COSTA OLIVEIRA",
      "JOSE NATALINO DO ROSARIO PEREIRA",
      "NELSON DA CRUZ SANTOS",
      "JOSINA PEREIRA PELEGRINO",
      "FRANCISCO ANTONIO DE MORAIS DA SILVA",
      "CLARICE BUENO DA SILVA",
      "RACHEL GALOTE FIGUEIREDO",
      "JORDANA PEREIRA DE SOUZA",
      "VALERIA ROCHA MENDES LIMA",
      "NILTON GOMES DE SOUSA",
      "Elida Paedra Alves De Sousa",
      "ELIENE SILVA VIANA",
      "STEFANIA APARECIDA DE FARIA",
      "IRAILMA SILVA CEZAR",
  ],
];

$emailsGerados = [];
$todos = new Funcionario();



?>

<link rel="stylesheet" href="../recursos/css/estilo.css">

<button class="button button1" onclick="window.location.href = '../views/exportacoes.php'">Gerar relatórios</button>

<table cellspacing="0">
    <?php foreach($filiais as $filial => $funcionarios): ?>
        <tr id="tr<?php echo $filial; ?>">  
            <th></th>
            <th></th>
            <th><h3><?php echo $filial; ?></h3></th>
        </tr>

        <tr id="tr<?php echo $filial; ?>">  
            <th>Nome</th>  
            <th>E-mail</th>
            <th>Filial</th>
        </tr>

        <?php 
            foreach($funcionarios as $funcionario): 
              $email = $todos -> converteNomeParaEmail($emailsGerados, $funcionario);
        ?>
            <tr>       
                <td><?php  echo $todos->converteNome($funcionario);  ?></td>
                <td> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></td>
                <td><?php echo $filial; ?> </td>
            </tr> 
        <?php endforeach; ?>
    <?php endforeach; ?>   
</table>

