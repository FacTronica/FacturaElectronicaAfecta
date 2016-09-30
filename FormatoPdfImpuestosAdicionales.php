#####################################################################
#####################################################################
# INICIO - TOTALES
#####################################################################
#####################################################################
#
$pos_x=145;
$pos_y=217;
$pdf->MultiCell($w=55, $h=34, $txt='', $border=1, $align='C', $fill=0, $ln=1, $pos_x, $pos_y, $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0);
#
$pdf->SetFont('helvetica', '',8);
# BORDE TOTALES
$pdf->Text($pos_x, $pos_y, "NETO");
$pdf->Text($pos_x, $pos_y+4, "IVA ".ExtraerValorNodo("TasaIVA")." %");
$pdf->Text($pos_x, $pos_y+8, "ILA ".$ImptoReten["24"]["TasaImp"]." %");
$pdf->Text($pos_x, $pos_y+12, "ILA ".$ImptoReten["25"]["TasaImp"]." %");
$pdf->Text($pos_x, $pos_y+16,  "ILA ".$ImptoReten["26"]["TasaImp"]." %");
$pdf->Text($pos_x, $pos_y+20,  "ILA ".$ImptoReten["27"]["TasaImp"]." %");
$pdf->Text($pos_x, $pos_y+24,  "ILA ".$ImptoReten["271"]["TasaImp"]." %");
$pdf->SetFont('helvetica', 'B',10);
$pdf->Text($pos_x, $pos_y+28, "TOTAL");
#
$pdf->SetFont('helvetica', '',8);
$pdf->Text($pos_x+35, $pos_y, "$".number_format(ExtraerValorNodo("MntNeto"),0,",","."));
$pdf->Text($pos_x+35, $pos_y+4, "$".number_format(ExtraerValorNodo("IVA"),0,",","."));
$pdf->Text($pos_x+35, $pos_y+8, "$".number_format($ImptoReten["24"]["MontoImp"],0,",","."));
$pdf->Text($pos_x+35, $pos_y+12, "$".number_format($ImptoReten["25"]["MontoImp"],0,",","."));
$pdf->Text($pos_x+35, $pos_y+16, "$".number_format($ImptoReten["26"]["MontoImp"],0,",","."));
$pdf->Text($pos_x+35, $pos_y+20, "$".@number_format($ImptoReten["27"]["MontoImp"],0,",","."));
$pdf->Text($pos_x+35, $pos_y+24, "$".@number_format($ImptoReten["271"]["MontoImp"],0,",","."));
$pdf->SetFont('helvetica', 'B',10);
$pdf->Text($pos_x+35, $pos_y+28, "$".number_format(ExtraerValorNodo("MntTotal"),0,",","."));
#
# TOTAL EN PALABRAS
$total_palabras=num2letras(round(ExtraerValorNodo("MntTotal")),false,false);
$pdf->SetFont('helvetica', 'B',7);
$pdf->MultiCell($w=123, $h=7, "SON: ".strtoupper($total_palabras)." PESOS", $border=1, $align='L', $fill=0, $ln=1, $pos_x=77, $pos_y='253', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0);
#####################################################################
#####################################################################
# FINAL - TOTALES
#####################################################################
#####################################################################
