<?php 
    //echo base_url().'application/libraries/mpdf/mpdf.php';die();
require_once  base_url().'application/libraries/mpdf/mpdf.php';
$a= new mPDF('');
$mundo="MUNDO PRUEBa";
$html="<H1>HOLA'.$mundo.'</h1>";
$html=  utf8_encode($html);

$a->WriteHTML($html);
$a->Output('prueba.pdf','D');exit;
?>