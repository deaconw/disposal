<?php

//
// Generate an inventory disposal form given the appropriate information
// Future upgrade plans include being able to generate multiple pages at a time
// and being able to upload .CSV files
//
// Author: William Deacon  (william.deacon@westsenators.org)
// Date: 01-30-2014
//

require('fpdf/fpdf.php');
require('generator.php');

// Did we get form data?
if( isset($_POST['item']) and isset($_POST['tag']) and isset($_POST['serial'])
	and isset($_POST['location']) and isset($_POST['room']) and isset($_POST['cond'])
	and isset($_POST['value']) and isset($_POST['method']) and isset($_POST['date']) ) {

		$pdf = new FPDF( 'P', 'mm', 'Letter' );
		$pdf = addPage( $pdf, $_POST['item'], $_POST['tag'], $_POST['serial'], $_POST['location'], $_POST['room'], $_POST['cond'], $_POST['value'], $_POST['method'], $_POST['date'] );
		$pdf->Output();
	
	} else {

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Disposal Form Generator</title>
	<link rel="stylesheet" type="text/css" href="css/smoothness/jquery-ui-1.10.4.custom.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$( "#datepicker" ).datepicker();
		});
	</script>
</head>

<body>
	<div id="stylized" class="myform">
	<form id="form" name="form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
	<h1>Disposal Form Generator</h1>

	<label>Item
	<span class="small">Item Description</span>
	</label>
	<input type="text" name="item" id="item" />

	<label>Tag
	<span class="small">Inventory Tag Number</span>
	</label>
	<input type="text" name="tag" id="tag" />
	
	<label>Serial
	<span class="small">Serial Number</span>
	</label>
	<input type="text" name="serial" id="serial" />
	
	<label>Building
	<span class="small">Item's Location</span>
	</label>
	<input type="text" name="location" id="location" />

	<label>Room
	<span class="small">Item's Location</span>
	</label>
	<input type="text" name="room" id="room" />
	
	<label>Condition
	<span class="small">Item's Current Condition</span>
	</label>
	<input type="text" name="cond" id="cond" />
	
	<label>Value
	<span class="small">Estimated Value Of Item</span>
	</label>
	<input type="text" name="value" id="value" />
	
	<label>Method
	<span class="small">Method of Disposal</span>
	</label>
	<select name="method" id="method">
		<option value="1">Donate to other Govt Entities  </option>
		<option value="2">Sale (under $10,000)</option>
		<option value="3">Auction (over $10,000)</option>
		<option value="4">Trade-in</option>
		<option value="5" selected >Junk</option>
		<option value="6">Stolen</option>
	</select>	
	
	<label>Date
	<span class="small">Current Date</span>
	</label>
	<input class="datepicker" id="datepicker" type="text" name="date" value="<?php echo date( 'm/d/Y' ) ?>"/>

	<button type="submit">Generate Disposal Form</button>
	<div class="spacer"></div>

	</form>
	</div>
</body>
</html>
<?php
	}
?>