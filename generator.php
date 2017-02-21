<?php

function addPage( $pdf, $item, $tag, $serial, $location, $room, $cond, $value, $method, $date ) {
	$pdf->AddPage();
	$pdf->SetFont( 'Courier', 'U', 12 );
	$pdf->Cell( 155 );
	$pdf->Cell( 15, 10, 'File:' );
	$pdf->SetFont( 'Courier', '', 12 );
	$pdf->Cell( 10, 10, 'DN-E' );
	$pdf->Ln();
	$pdf->Cell( 200, 8, 'Washington-Nile Local School District', 0, 0, 'C' );
	$pdf->Ln();
	$pdf->Cell( 200, 8, 'Fixed Asset Disposal Form', 0, 0, 'C' );
	$pdf->Ln();
	$pdf->Cell( 200, 8, '- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -', 0, 0, 'C' );
	$pdf->Ln( 5 );
	$pdf->Cell( 200, 8, 'SECTION I', 0, 0, 'C' );
	$pdf->Ln( 5 );
	$pdf->Cell( 200, 8, '(To be completed by Principal/Department Heads)', 0, 0, 'C' );
	$pdf->Ln();
	$pdf->Cell( 200, 8, 'ITEM   __________________________________________________________', 0, 0, 'C' );
	$pdf->Ln();
	$pdf->Cell( 200, 8, 'TAG NUMBER   ____________________  SERIAL NUMBER  _______________', 0, 0, 'C' );
	$pdf->Ln();
	$pdf->Cell( 200, 8, 'LOCATION TAKEN FROM   ___________________________________________', 0, 0, 'C' );
	$pdf->Ln( 5 );
	$pdf->Cell( 200, 8, '                      (Building)                        (Room)   ', 0, 0, 'C' );
	$pdf->Ln();
	$pdf->Cell( 200, 8, 'CONDITION  ___________________  ESTIMATED VALUE  ________________', 0, 0, 'C' );
	$pdf->Ln();
	$pdf->Cell( 200, 8, 'RECOMMENDED METHOD OF DISPOSAL:                                  ', 0, 0, 'C' );
	$pdf->Ln();
	$pdf->Cell( 200, 8, '          ____  Donate to other Govt Entities                    ', 0, 0, 'C' );
	$pdf->Ln( 5 );
	$pdf->Cell( 200, 8, '          ____  Sale (under $10,000)                             ', 0, 0, 'C' );
	$pdf->Ln( 5 );
	$pdf->Cell( 200, 8, '          ____  Auction (over $10,000)                           ', 0, 0, 'C' );
	$pdf->Ln( 5 );
	$pdf->Cell( 200, 8, '          ____  Trade-in                                         ', 0, 0, 'C' );
	$pdf->Ln( 5 );
	$pdf->Cell( 200, 8, '          ____  Junk                                             ', 0, 0, 'C' );
	$pdf->Ln( 5 );
	$pdf->Cell( 200, 8, '          ____  Stolen - give details concerning the event       ', 0, 0, 'C' );
	$pdf->Ln();
	$pdf->Cell( 200, 8, '________________________________              _________________  ', 0, 0, 'C' );
	$pdf->Ln( 5 );
	$pdf->Cell( 200, 8, '    Signature                                     Date           ', 0, 0, 'C' );
	$pdf->Ln();
	$pdf->Cell( 200, 8, '- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -', 0, 0, 'C' );
	$pdf->Ln( 5 );
	$pdf->Cell( 200, 8, 'SECTION II', 0, 0, 'C' );
	$pdf->Ln( 5 );
	$pdf->Cell( 200, 8, '(To be completed by Superintendent)', 0, 0, 'C' );
	$pdf->Ln();
	$pdf->Cell( 16 );
	$pdf->Cell( 200, 8, 'Items having a fair market value of under $10,000 must be' );
	$pdf->Ln( 5 );
	$pdf->Cell( 16 );
	$pdf->Cell( 200, 8, 'approved by the Superintendent.' );
	$pdf->Ln();
	$pdf->Cell( 200, 8, '               _____  Approved      _____  Disapproved           ', 0, 0, 'C' );
	$pdf->Ln();
	$pdf->Cell( 200, 8, '________________________________              _________________  ', 0, 0, 'C' );
	$pdf->Ln( 5 );
	$pdf->Cell( 200, 8, '    Signature                                     Date           ', 0, 0, 'C' );
	$pdf->Ln();
	$pdf->Cell( 16 );
	$pdf->Cell( 200, 8, 'Items having a fair market value of over $10,000 must be approved by' );
	$pdf->Ln( 5 );
	$pdf->Cell( 16 );
	$pdf->Cell( 200, 8, 'the Board of Education and auctioned.' );
	$pdf->Ln();
	$pdf->Cell( 200, 8, '               Date of Approval  ______________________          ', 0, 0, 'C' );
	$pdf->Ln();
	$pdf->Cell( 200, 8, '                   Resolution Number  ___________                ', 0, 0, 'C' );
	$pdf->Ln();
	$pdf->Cell( 200, 8, '- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -', 0, 0, 'C' );
	$pdf->Ln( 5 );
	$pdf->Cell( 200, 8, 'SECTION III', 0, 0, 'C' );
	$pdf->Ln( 5 );
	$pdf->Cell( 200, 8, '(To be completed by Treasurer if Sold)', 0, 0, 'C' );
	$pdf->Ln();
	$pdf->Cell( 200, 8, ' Receipt Number  ______________________      Date  ____________  ', 0, 0, 'C' );
	
	$pdf->SetFont( 'Arial', '', 12 );
	$pdf->SetXY( 60, 54 );
	$pdf->Cell( 100, 8, $item );
	$pdf->SetXY( 65, 62 );
	$pdf->Cell( 100, 8, $tag );
	$pdf->SetXY( 159, 62 );
	$pdf->Cell( 100, 8, $serial );
	$pdf->SetXY( 87, 70 );
	$pdf->Cell( 100, 8, $location );
	$pdf->SetXY( 159, 70 );
	$pdf->Cell( 100, 8, $room );
	$pdf->SetXY( 60, 83 );
	$pdf->Cell( 100, 8, $cond );
	$pdf->SetXY( 159, 83 );
	$pdf->Cell( 100, 8, $value );
	$pdf->SetXY( 149, 132 );
	$pdf->Cell( 100, 8, $date );
	
	switch( $method ) {
		case 1:
			$pdf->SetXY( 55, 99 );
			break;
		case 2:
			$pdf->SetXY( 55, 104 );
			break;
		case 3:
			$pdf->SetXY( 55, 109 );
			break;
		case 4:
			$pdf->SetXY( 55, 114 );
			break;
		case 5:
			$pdf->SetXY( 55, 119 );
			break;
		case 6:
			$pdf->SetXY( 55, 124 );
			break;			
	}
	$pdf->Cell( 100, 8, 'X' );
			
	return $pdf;
}

?>