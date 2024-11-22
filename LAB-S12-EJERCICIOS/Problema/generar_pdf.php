<?php 
require('fpdf.php');
require_once('Model/database.php');
$db = new Database();
$conn = $db->conectar();
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, utf8_decode('Reporte de Ventas'), 0, 1, 'C');

$pdf->Ln(10);

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(200, 220, 255);
$pdf->Cell(20, 10, 'ID', 1, 0, 'C', true);
$pdf->Cell(40, 10, 'Nombre', 1, 0, 'C', true);
$pdf->Cell(25, 10, 'DNI', 1, 0, 'C', true);
$pdf->Cell(40, 10, 'Producto', 1, 0, 'C', true);
$pdf->Cell(15, 10, 'Cant.', 1, 0, 'C', true);
$pdf->Cell(25, 10, 'Precio', 1, 0, 'C', true);
$pdf->Cell(25, 10, 'Total', 1, 1, 'C', true);

$sql = "SELECT * FROM ventas";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

$pdf->SetFont('Arial', '', 10);
if (count($result) > 0) {
    foreach ($result as $row) {
        $pdf->Cell(20, 10, $row['idVenta'], 1, 0, 'C');
        $pdf->Cell(40, 10, utf8_decode($row['nombre']), 1, 0, 'C');
        $pdf->Cell(25, 10, $row['dni'], 1, 0, 'C');
        $pdf->Cell(40, 10, utf8_decode($row['producto']), 1, 0, 'C');
        $pdf->Cell(15, 10, $row['cantidad'], 1, 0, 'C');
        $pdf->Cell(25, 10, 'S/ ' . number_format($row['precio_unitario'], 2), 1, 0, 'C');
        $pdf->Cell(25, 10, 'S/ ' . number_format($row['total'], 2), 1, 1, 'C');
    }
} else {
    $pdf->Cell(0, 10, 'No hay datos disponibles.', 1, 1, 'C');
}

$pdf->Output('I', 'reporte_ventas.pdf');
?>