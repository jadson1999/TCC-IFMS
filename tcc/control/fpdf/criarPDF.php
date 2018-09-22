
<?php

ini_set ('display_errors', 1);
ini_set ('display_startup_errors', 1);
error_reporting (E_ALL);

require_once ('fpdf.php');

if(isset($_POST['titulo']) and isset($_POST['introducao']) and isset($_POST['argumento1']) and isset($_POST['argumento2']) and isset($_POST['argumento3']) and isset($_POST['conclusao'])){
    $pdf= new FPDF();
    $pdf->Addpage();
    $pdf->SetMargins(2.5, 3, 1);
    $pdf->SetFont('Arial', 'B', 18);
    $pdf->Cell(80);

    $pdf->SetTitle($_POST['titulo'], true);
    $pdf->Cell(30, 10, $_POST['titulo'], 0, 0, 'C');
    $pdf->Ln(13);

    $pdf->SetFont('Arial', '', 12);
    $pdf->Write(10, $_POST['introducao']);
    $pdf->Ln(13);

    $pdf->SetFont('Arial', '', 12);
    $pdf->Write(10, $_POST['argumento1']);
    $pdf->Ln(13);

    $pdf->SetFont('Arial', '', 12);
    $pdf->Write(10, $_POST['argumento2']);
    $pdf->Ln(13);

    $pdf->SetFont('Arial', '', 12);
    $pdf->Write(10, $_POST['argumento3']);
    $pdf->Ln(13);

    $pdf->SetFont('Arial', '', 12);
    $pdf->Write(10, $_POST['conclusao']);
    $pdf->Ln(13);

    $pdf->Output();
}

?>