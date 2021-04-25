<?php

    require('../../../src/assets/extra-libs/pdf/fpdf.php');

    class PDF1 extends FPDF
    {
    // Cabecera de página
    function Header()
    {
        // Arial bold 15
        $this->SetFont('Arial','B',18);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(30,10,utf8_decode('Empleados Con Más Ventas'),0,0,'C');
        // Salto de línea
        $this->Ln(20);
        //titulos de la tabla
        $this->Cell(20, 10, '', 0, 0, 'C', 0);
        $this->Cell(30, 10, '*', 1, 0, 'C', 0);
        $this->Cell(60, 10, 'Nombres', 1, 0, 'C', 0);
        $this->Cell(60, 10, utf8_decode('N° de Compras'), 1, 1, 'C', 0);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
    }
    }

    //consulta
    require '../../../conexion.php'; //archivo que hace la conexion a la bd
    $consulta = "SELECT COUNT(usuarios.nombres) AS contador, usuarios.id_usuario, 
    usuarios.nombres, usuarios.apellidos FROM `usuarios`,`ventas`,`detalle_venta` 
    WHERE usuarios.id_usuario = ventas.id_empleado AND detalle_venta.id_venta = ventas.id_venta 
    GROUP BY usuarios.nombres ORDER BY contador DESC;";
    $resultado = mysqli_query($conexion, $consulta);

    //generador del pdf
    $pdf = new PDF1();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',16);

    //tabla de los datos
    while ($row = $resultado->fetch_assoc()) {
        $pdf->Cell(20, 10, '', 0, 0, 'C', 0);
        $pdf->cell(30, 10, utf8_decode ($row['id_usuario']), 1, 0, 'C', 0);
        $pdf->cell(60, 10, utf8_decode ($row['nombres']), 1, 0, 'C', 0);
        $pdf->cell(60, 10, utf8_decode ($row['contador']), 1, 1, 'C', 0);
    }

    $pdf->Output();

?>