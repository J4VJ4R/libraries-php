<?php

require '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();

// Recoger la vista a imprimir
// ob_start();
// require_once './pdf_generar.php';
$html = "<h1>Test to pdf</h1>";

$html2pdf->writeHTML($html);
$html2pdf->output('pdf_generado.pdf');