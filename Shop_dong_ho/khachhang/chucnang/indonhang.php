<?php 
require('../../chucnang/condb.php');
require('../../tfpdf/tfpdf.php');
$codecart = $_GET['codecart'];
$pdf = new tFPDF();
$pdf->AddPage();
// $pdf->SetFont('Arial','B',16);
$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
$pdf->SetFont('DejaVu','',16);

$pdf->SetFillColor(193,229,252);
$pdf->Write(10,'Đơn hàng của bạn gồm có:');
	$pdf->Ln(10);

	$width_cell=array(15,30,40,30,40,40);

	$pdf->Cell($width_cell[0],10,'ID',1,0,'C',true);
	$pdf->Cell($width_cell[1],10,'Mã hàng',1,0,'C',true);
	$pdf->Cell($width_cell[2],10,'Tên sản phẩm',1,0,'C',true);
	$pdf->Cell($width_cell[3],10,'Số lượng',1,0,'C',true); 
	$pdf->Cell($width_cell[4],10,'Giá',1,0,'C',true);
	$pdf->Cell($width_cell[5],10,'Tổng tiền',1,1,'C',true); 
	$pdf->SetFillColor(235,236,236); 
	$fill=false;
	$i = 0;
	$sql = "SELECT * FROM donhangchitiet dhct, sanpham sp WHERE dhct.idsanpham = sp.masp and dhct.codecart = $codecart";
	$qr = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($qr)){
		$i++;
	$pdf->Cell($width_cell[0],10,$i,1,0,'C',$fill);
	$pdf->Cell($width_cell[1],10,$row['codecart'],1,0,'C',$fill);
	$pdf->Cell($width_cell[2],10,$row['tensanpham'],1,0,'C',$fill);
	$pdf->Cell($width_cell[3],10,$row['soluongdh'],1,0,'C',$fill);
	$pdf->Cell($width_cell[4],10,number_format( $row["giatien"],3,'.',',').'vnd',1,0,'C',$fill);
	$pdf->Cell($width_cell[5],10,number_format($row['soluongdh']*$row['giatien'],3,'.',',').'vnd',1,1,'C',$fill);
	$fill = !$fill;

	}
	$pdf->Write(10,'Cảm ơn bạn đã đặt hàng tại website của chúng tôi.');
	$pdf->Ln(10);
	$pdf->Output();

 ?>