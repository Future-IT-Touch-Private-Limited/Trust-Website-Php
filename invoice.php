<?php
include 'conn.php';
$sql = mysqli_query($conn,"SELECT * FROM `donation`  WHERE `id` = '".$_GET['id']."'");
 $row = mysqli_fetch_assoc($sql);
 
$sql = mysqli_query($conn,"SELECT * FROM `footer` ORDER BY `id` DESC LIMIT 1");

     $result = mysqli_fetch_assoc($sql);
     


 function getIndianCurrency(float $number)
{
    $decimal = round($number - ($no = floor($number)), 2) * 100;
    $hundred = null;
    $digits_length = strlen($no);
    $i = 0;
    $str = array();
    $words = array(0 => '', 1 => 'one', 2 => 'two',
        3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six',
        7 => 'seven', 8 => 'eight', 9 => 'nine',
        10 => 'ten', 11 => 'eleven', 12 => 'twelve',
        13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen',
        16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen',
        19 => 'nineteen', 20 => 'twenty', 30 => 'thirty',
        40 => 'forty', 50 => 'fifty', 60 => 'sixty',
        70 => 'seventy', 80 => 'eighty', 90 => 'ninety');
    $digits = array('', 'hundred','thousand','lakh', 'crore');
    while( $i < $digits_length ) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += $divider == 10 ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
            $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
            $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
        } else $str[] = null;
    }
    $Rupees = implode('', array_reverse($str));
    $paise = ($decimal > 0) ? "." . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' Paise' : '';
    return ($Rupees ? $Rupees . 'Rupees ' : '') . $paise;
}

$prices = getIndianCurrency($row['donation_price']);
 ?>

 
  <!-- partial -->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>

		<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}
          .information td {
	text-align: left !important;
}
			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}
			#notices {
	background-color: #fcecaa;
	padding: 10px 10px;
	font-size: 12px;
}

			.invoice-box table td {
				padding: 0px;
				vertical-align: top;
			}
			.note {
	font-weight: 900;
	padding-left: 29px;
}

			.invoice-box table tr td:nth-child(2) {
	       text-align: center;
              }
			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
	            padding-bottom: 10px;
           }

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
		</style>
	</head>

	<body>
		<div class="invoice-box">
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
								   
     
									<img src="https://ratnatrayajinmandir.com/images/logo2.png" alt="" width="197" height="54"/>
						
            
            
								</td>

								<td>
									<h2>Ratnatraya Jin Mandir</h2>
                                    <p>H.A.F., Pocket -A, Institutional Area, Sector 10, Dwarka New Delhi -110075<br>
                                 Company PAN No : AAHAS6643R</p> 

								</td>
								<td>
								</td>
								
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
									<strong>Donated by:</strong> <?php echo $row['donation_name'] ?>
								</td>

								<td>
									<strong>Receipt #:</strong> <?php echo '1000'+$row['id'] ?>
								</td>

							</tr>
							<tr>
								<td>
									<strong>Address:</strong> <?php echo $row['donation_address'] ?>                                                                                   
								</td>

								<td>
									<strong>Receipt issued:</strong> <?php echo date('d-m-Y', $row['donation_date']) ?>
								</td>

							</tr>
						
							<tr>
								<td>
									                                                                                  
								</td>
                                <?php if($row['donation_pan_number']!=''){?>
								<td>
									<strong>PAN No.:</strong> <?php echo $row['donation_pan_number'] ?>
								</td>
                                <?php } ?>
							</tr>
							<tr>
								<td>
									                                                                                  
								</td>

								<td>
									<strong>Mobile No.:</strong><?php echo $row['donation_phone_number'] ?> 
								</td>

							</tr>
							<tr>
								<td>
									<strong>Date of donation:</strong> <?php echo date('d-m-Y',  $row['donation_date']) ?>
                                                                                
								</td>

								<td>
									
								</td>

							</tr>
							<tr>
								<td>
									<strong>Amount donated:</strong> <?php echo ucwords($prices) ?>                                                                                   
								</td>

								<td>
									
								</td>

							</tr>
						</table>
					</td>
				</tr>	
			</table>
			<div id="notices">
        <div class="note">NOTICE:</div>
        <div class="notice"><ul><li> Donation is accepted in Indian Rupees only.</li>
             <li> 50% of the Voluntary Contribution for the purpose of renovation/repair of Mandir, to Shri Ram Janmbhoomi TeerthKshetra are eligible for deduction under sec 80G(2)(b), subject to other conditions mentioned under section 80G of the Income Tax Act 1961.</li>
             <li>To receive 80G certificate PAN number entry is mandatory.</li>
            <li> Donation made to the trust shall not be refunded in any case.</li>
        </ul>
      </div>
		</div>
	</body>
</html>




<script type="text/javascript">window.print()</script>

