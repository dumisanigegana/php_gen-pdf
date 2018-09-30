<?php
// Include autoloader
require_once 'dompdf/autoload.inc.php';

// Reference the Dompdf namespace
use Dompdf\Dompdf;

// Instantiate and use the dompdf class
$dompdf = new Dompdf();


// Load HTML content
$dompdf->loadHtml('
	<html>
	<head>
		<title>Invoice</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>	
	<div class="head">
			<div id="name">Paul RICHARDSLLC</div>
			<div class="address"><p>2464 Masons Ferry Dr, Apt 101</p>
				<p>Herndon, VA 20171</p>
				<p> Email:paulrichardsllc@miail.com </p>
				<p>Phone: 4 105283699</p>
				<p>Fax:l23456789</p>
			</div>
		</div>
		<div>
			<p>Invoice ID: <?php echo $_POST["invoice_num"]; ?></p>
			<p>Date: '.date("m.d.y").'</p>
		</div>
		<table>
			<tr>
			    <td>
			    	<p>Invoice for: '.$_POST['invoice_for'].'</p>
			    	<p>Payment Terms: '.$_POST['pay_terms'].'</p>
			    </td>
			    <td> 
			    	<div id="billto">	
				    	<p>Bill To:</p>
				    	<p>HAULMATCH.COM</p><br>
				    	<p>6 Neshaminy Interplex, Suite 310</p>
				    	<p>Travorse, PA 19053</p>
				    	<p>Email: ryrosh@haulmatch.com</p>
				    	<p>Phone: 2156604004209</p>
				    </div>

			    </td>
			</tr>
			<tr>
			    <td>
			    	<p>Origin</p>
			    	<p>15 LE-WAY DRIVE</p>
			    	<p>FREDERICKSBURG, VA 22406</p>
			    </td>
			    <td>
			    	<p>Destination</p>
			    	<p>7646 MILL ROAD</p>
			    	<p>LEXINGTON, KY</p>
			    </td>
			  </tr>
			  <tr>
			  	<td>
			  		<table>
			  			<tr class="tbl-head">
				  			<td>Quantity</td>
				  			<td>Vihicle Description</td>
				  		</tr>
			  			<tr>
			  				<td>1</td>
			  				<td>2008 Honda Pilot VIN:  F5NYF18528BO50032 Type: SUV.</td>
			  			</tr>
			  			<tr>
			  				<td>1</td>
			  				<td>Total Due</td>
			  			</tr>
			  		</table>
			  	</td>
			  	<td>
			  		<table >
			  			<tr>
			  			<td class="txtleft">Total</td>
			  			</tr
			  			<tr>
			  				<td class="txtleft">$558.00  COD</td>
			  			</tr>
			  			<tr>
			  				<td class="txtleft">$558.00  COD</td>
			  			</tr>
			  		</table>
			  	</td>
			  </tr>
		</table>
		<div class="ft">Poweered by Truckify Contct Lekgotla Mosope at 4105283699 or ema11 us
at paulrichardsllc@gmail.com If you have any questions concerning this invoice.
</div>
</body>
</html>
');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
?>