<?php

use Dompdf\Dompdf;

require '../'.'vendor/autoload.php';

// instantiate and use the dompdf class
$dompdf = new Dompdf(["enable_remote" => true]);
$dompdf->loadHtml("<h1>Esse é meu primeiro pdf </h1>");

ob_start();
require '../views/'. "exibe.php";
$dompdf->loadHtml(ob_get_clean());

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("documento.pdf", ["Attachment" => false]);

