<?php

require '../../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();

$html = "<p>Hola mundo desde una librería php</p>";
$html .= "<p>Este es un párrafo</p>";

$html2pdf->writeHTML($html);
$html2pdf->output('pdf_generado.pdf');