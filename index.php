<?php 
use Mpdf\Mpdf;

ob_start();
?>

<h1>Olá mundo</h1><h4>Sub titulo etc ...</h4>

<?php 
$html = ob_get_contents();

ob_end_clean();

require 'vendor/autoload.php';

$mpdf = new Mpdf();

$mpdf->WriteHTML($html);

$mpdf->Output('arquivo.pdf', 'F');// I = abra no browser | D = faz o dowload  |  F = salva no servidor

$link = 'http://localhost/relatorio/arquivo.pdf';

echo 'Faça o dowload <a href="'.$link.'" > Aqui</a>';


//Documentação: https://mpdf.github.io/
?>