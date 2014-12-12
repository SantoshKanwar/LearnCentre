<?php
	session_start();
	$top1=$_SESSION["top"];
		
	require("fpdf.php");	
			
			$pdf = new FPDF();
			
			$pdf->AddPage();
			$pdf->SetFont('Arial','B',17);
			
			$pdf->SetY(20);
			$pdf->SetX(60);
						
			$pdf->Cell(0,10,$top1[0]);
			$pdf->Ln(); 
				
			$pdf->SetY($pdf->GetY());
			$pdf->SetX(10);
				
			$pdf->Cell(0,10,'------------------------------------------------------------------------------------------------');
			$pdf->Ln();
			
			$pdf->SetFont('Arial','',15);
			$total=0;

			$pdf->SetY($pdf->GetY());
			$pdf->SetX(10);
				
			$rs=$_SESSION["outp"];
			$pdf->Cell(0,10,$top1[1]);
			$pdf->Ln();
			$pdf->Ln();
			$pdf->SetFont('Arial','',12);
						
			for($i=0;$i<14;$i++)
			{
				$tmp=$rs[$i];
				$k=0;$j=0;$l=0;$out="";$outp=array();;
				while($j < strlen($tmp))
				{
					if($k == 90)
					{
						$k=0;
						$outp[$l]=$out;
						$out="";
						//echo $outp[$l].' 1 <br>';
						$l++;
					}
					$out.=$tmp[$j];
					//echo $out.' << '.$j.' <br>';
					$k++;$j++;
					if($j == (strlen($tmp))){
						$outp[$l]=$out;
						//echo $outp[$l].' 1 <br>';
					}
				}
				foreach($outp as $o)
					{
						$pdf->SetY($pdf->GetY());
						$pdf->SetX(10);
						$pdf->Cell(0,10,$o);
						$pdf->Ln();
					}
					
			}
			$pdf->AddPage();
			$pdf->SetFont('Arial','',12);
			
			
			for($i=14;$i<35;$i++)
			{
				$tmp=$rs[$i];
				$k=0;$j=0;$l=0;$out="";$outp=array();;
				while($j < strlen($tmp))
				{
					if($k == 90)
					{
						$k=0;
						$outp[$l]=$out;
						$out="";
						//echo $outp[$l].' 1 <br>';
						$l++;
					}
					$out.=$tmp[$j];
					//echo $out.' << '.$j.' <br>';
					$k++;$j++;
					if($j == (strlen($tmp))){
						$outp[$l]=$out;
						//echo $outp[$l].' 1 <br>';
					}
				}
				foreach($outp as $o)
					{
						$pdf->SetY($pdf->GetY());
						$pdf->SetX(10);
						$pdf->Cell(0,10,$o);
						$pdf->Ln();
					}
					
			}
			$pdf->AddPage();
			$pdf->SetFont('Arial','',12);
			
			for($i=35;$i<56;$i++)
			{
				$tmp=$rs[$i];
				$k=0;$j=0;$l=0;$out="";$outp=array();;
				while($j < strlen($tmp))
				{
					if($k == 90)
					{
						$k=0;
						$outp[$l]=$out;
						$out="";
						//echo $outp[$l].' 1 <br>';
						$l++;
					}
					$out.=$tmp[$j];
					//echo $out.' << '.$j.' <br>';
					$k++;$j++;
					if($j == (strlen($tmp))){
						$outp[$l]=$out;
						//echo $outp[$l].' 1 <br>';
					}
				}
				foreach($outp as $o)
					{
						$pdf->SetY($pdf->GetY());
						$pdf->SetX(10);
						$pdf->Cell(0,10,$o);
						$pdf->Ln();
					}
					
			}
			for($i=56;$i<70;$i++)
			{
				$tmp=$rs[$i];
				$k=0;$j=0;$l=0;$out="";$outp=array();;
				while($j < strlen($tmp))
				{
					if($k == 90)
					{
						$k=0;
						$outp[$l]=$out;
						$out="";
						//echo $outp[$l].' 1 <br>';
						$l++;
					}
					$out.=$tmp[$j];
					//echo $out.' << '.$j.' <br>';
					$k++;$j++;
					if($j == (strlen($tmp))){
						$outp[$l]=$out;
						//echo $outp[$l].' 1 <br>';
					}
				}
				foreach($outp as $o)
					{
						$pdf->SetY($pdf->GetY());
						$pdf->SetX(10);
						$pdf->Cell(0,10,$o);
						$pdf->Ln();
					}
					
			}
			$pdf->SetFont('Arial','B',16);
			$pdf->SetY($pdf->GetY());
			$pdf->SetX(80);
			$pdf->Ln();
			// 0 - 205
				
			//$pdf->Output();
			//$pdf->Output("reports/report.pdf");
			$pdf->Output("quiz_result.pdf","I");
?>