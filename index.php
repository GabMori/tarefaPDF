<?php

require __DIR__.'/vendor/autoload.php';


use Dompdf\Dompdf;

$dompdf = new Dompdf();

$dompdf->loadhtml('<h1>PDF gerado!!</h1><br><br><h2>Aluno: Gabriel Vieira Morais.</h2>
<br><h2>Turma: Sistemas de Informação 5 Fase.</h2><br><h2>Professor: Sandro Alencar Fernandes</h2>');

$dompdf->render();

header('Content-type: application/pdf');

echo $dompdf->output();