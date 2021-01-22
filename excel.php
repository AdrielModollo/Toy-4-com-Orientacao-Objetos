<?php

require_once 'orientacaoObjeto.php';

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

<link rel="stylesheet" href="recursos/css/estilo.css">

<?php 
$arquivo = 'planilha.xls';

$html = '';
$html .= '<table cellspacing="0">';
     foreach($filiais as $filial => $funcionarios) {
     $html .= '<tr id="tr '.  $filial . '">';
     $html .= '<th></th>';
     $html .= '<th></th>';
     $html .= '<th><h3>'.  $filial . '</h3></th>';
     $html .= '</tr>';

     $html .= '<tr id="tr'.  $filial . '">';
     $html .=  '<th>Nome</th>';
     $html .=   '<th>E-mail</th>';
     $html .=    '<th>Filial</th>';
     $html .=   '</tr>';
    

            foreach($funcionarios as $funcionario) {
              $email = $todos -> converteNomeParaEmail($emailsGerados, $funcionario);
        
            $html .= '<tr>';      
            $html .= '<td>'. $todos->converteNome($funcionario)  .'</td>';
            $html .= '<td> <a href="mailto:'. $email .'">'. $email .'</a></td>';
            $html .= '<td>'. $filial .' </td>';
            $html .= '</tr>';
           
        }
    }
 
    $html .= '</table>';

    // Configurações header para forçar o download
    header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
    header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");
    header ("Content-type: application/x-msexcel");
    header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
    header ("Content-Description: PHP Generated Data" );

    // Envia o conteúdo do arquivo
    echo $html;
    exit;

