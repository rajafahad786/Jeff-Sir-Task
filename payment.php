<?php
error_reporting(0);
//echo '<h1>POST</h1><pre>';
//print_r($_POST);
//echo '</pre><br><br>';
// Your POST data
$data = http_build_query(array(
	'username' => 'App Test' ,
	'password' => 'PPxhnXwHMXJG3e' ,
	'method' => 'NewProspect',
	 'firstName'=> $_POST['firstName'],
	 'lastName' => $_POST['lastName'],
	'address1' 	=>	$_POST['address1'],
	'city' 		=>	$_POST['city'],
	'state' 	=>	$_POST['state'],
	'country'	=>	$_POST['country'],
	'zip' 		=>	$_POST['zip'],
	'phone' 	=>	$_POST['phone'],
	'email' 	=>	$_POST['email'],
	'step' 		=>	$_POST['step'],
	'campaignId'=>	$_POST['campaignId'],
	'SID'		=>	$_POST['SID'],
	'AFID'		=>	$_POST['AFID'],
	'AFFID'		=>	$_POST['AFFID'],
	'C1'		=>	$_POST['C1'],
	'C2'		=>	$_POST['C2'],
	'C3'		=>	$_POST['C3'],
	'AID'		=>	$_POST['AID'],
	'OPT'		=>	$_POST['OPT'],
	'notes'		=>	$_POST['notes'],
	'ipAddress'	=>	$_POST['ipAddress'],
));

// Create HTTP stream context
$context = stream_context_create(array(
    'http' => array(
        'method' => 'POST',
        'header' => 'Content-Type: application/x-www-form-urlencoded',
        'content' => $data
    )
));

// Make POST request
$response = file_get_contents('https://www.ihfoffers.com/admin/transact.php', false, $context);
parse_str($response, $get_array);
echo '<h1>Response</h1><pre>';
print_r($get_array);
echo '</pre>';
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/checkout.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript">
function shippingandhandling(val){
	if(val == 1){
		document.getElementById("show1").style.display = "";
		document.getElementById("show2").style.display = "none";
		document.getElementById("show3").style.display = "none";
		
		}else if(val == 2){
			document.getElementById("show1").style.display = "none";
			document.getElementById("show2").style.display = "";
			document.getElementById("show3").style.display = "none";
		
			}else if(val == 3){
				document.getElementById("show1").style.display = "none";
				document.getElementById("show2").style.display = "none";
				document.getElementById("show3").style.display = "";
		
				}
	}
</script>
</head>

<body>
<?php
if($get_array['errorFound'] !=0){
echo '<br><br><br><h1 style="color:red">Failed</h1>';
echo '<h2>Error Message : '.$get_array['errorMessage'].'</h2>';	
}
?>

<div class="wraper">
            	<div class="bg-rounded">
                <img src="images/head-img.png" class="flt-l">
                <!---------Left Content Start Here---------->
            	<div class="left-container flt-l">
                
                <div class="left_side">
                <div class="content_side">
                    <div class="content_side_main">
                    
                        <div class="clear"></div>
                        <div class="content_side1">
                            <div>
                                <div class="Qty">
                                    Select
                                </div>
                                <div class="Details">
                                    Details
                                </div>
                                <div class="Price">
                                    &nbsp; &nbsp; &nbsp; &nbsp; Price
                                </div>
                                <div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="content_side2">
                            <div class="Qty_num">
                                <input checked="checked" id="radio_qty_5" name="offer_option" value="1" type="radio" class="picked" onClick="shippingandhandling(this.value);">
                            </div>
                            <div class="Details_txt">Oxygen Pur - One Time Purchase</div>
                            <div class="Price_txt">
                                $4.49
                            </div>
                            <div>
                            </div>
                        </div>
                        <div class="clear"></div>
                       
                        <div class="clear"></div>
                        <div class="content_side2">
                            <!--<div class="Qty_num">
                                <input id="radio_qty_4" name="offer_option" value="radio_qty_4"  type="radio">
                            </div>-->
                            <!--<div class="Details_txt">
                                 Buy 1 Month & Get 1 Free Bottle
                            </div>-->
                            <!--<div class="Price_txt">
                                $19.95
                            </div>-->
                            <div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        
                        <div class="content_side3">
                                                <!-----Promo Code Box--->
                        <!--<div class="flt-l">
                			<h2 style="color:#000;text-align: left;margin: 0 0 5px 0;">Enter Your Promo Code</h2>
                              <input type="text" id="" placeholder="DEAL" value="" style="background:#FFF; border:1px solid #6e6e6e; width:141px; height:22px; margin:0; padding:0; float:left;">
                              <span class="applycode"></span>
                              <div class="flt-n"></div>
              		</div>-->
                        
                        <!-----Promo Code Box--->

                            <div class="txt1" id="show1" style="display: block;">
                                Shipping &amp; Handling: &nbsp; &nbsp;  $0.00<br>
                                <span style="padding-top: 5px; display: block;">Total: &nbsp; &nbsp;<span id="total">$49.99</span></span>
                            </div>
                            <div class="txt1" id="show2" style="display: none;">
                                Shipping &amp; Handling: &nbsp; &nbsp; &nbsp; &nbsp; $0.00<br>
                                <span style="padding-top: 5px; display: block;">Total: &nbsp; &nbsp;<span id="total">$29.99</span></span>
                            </div>
                            <div class="txt1" id="show3" style="display: none;">
                                Shipping &amp; Handling: &nbsp; &nbsp; &nbsp; &nbsp; $0.00<br>
                                <span style="padding-top: 5px; display: block;">Total: &nbsp; &nbsp;<span id="total">$5.99</span></span>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                    </div>
                    
                    
                </div>
            </div>
                
                
            	<div>
            	  <div class="flt-n"></div>
                  </div>
               <img src="images/arrow.png" style="position: absolute; left: -22px; top: 355px;;"></div>
               
            
                  <!---------Left Content End Here---------->
                  <!------Right Section Start here----->      
                  <div class="flt-r frm-bg" style="width:35%;">
                  	<div class="frm-container">
                        	<form name="requestForm" action="submit.php" id="requestForm" method="post">
                            <input type="hidden" name="prospectId" id=""  value="<?php echo $get_array['prospectId']?>"/>
                              <div class="label">We Accept: &nbsp; &nbsp;<img src="images/card-types.png" style="vertical-align:middle;"></div><br>
                              <div class="label">Card Type:<select id="creditCardType" name="creditCardType" class="validate[required]" required><option value="">Select Payment Method</option><option value="visa">Visa</option><option value="master">Master Card</option><option value="discover">Discover</option></select></div>
                               <div class="label">Card #:<input type="text" maxlength="16" onkeydown="return onlyNumbers(event, 'cc')" id="creditCardNumber" name="creditCardNumber" autocomplete="off" class="txtfld validate[required]" required=""></div>
                              
                               <div class="label">Exp. Date: <select class="formselect" name="fields_expmonth" id="fields_expmonth" style="width:72px;">
                                <option value="" onclick="" selected="">Month</option>
                                <option value="01" onclick="">(01) January</option><option value="02" onclick="">(02) February</option><option value="03" onclick="">(03) March</option><option value="04" onclick="">(04) April</option><option value="05" onclick="">(05) May</option><option value="06" onclick="">(06) June</option><option value="07" onclick="">(07) July</option><option value="08" onclick="">(08) August</option><option value="09" onclick="">(09) September</option><option value="10" onclick="">(10) October</option><option value="11" onclick="">(11) November</option><option value="12" onclick="">(12) December</option>  </select>
                                 <select class="formselect" style="width:72px;" name="fields_expyear" id="fields_expyear">
                                <option value="" onclick="" selected="">Year</option>
                                <option value="15" onclick="">2015</option><option value="16" onclick="">2016</option><option value="17" onclick="">2017</option><option value="18" onclick="">2018</option><option value="19" onclick="">2019</option><option value="20" onclick="">2020</option><option value="21" onclick="">2021</option><option value="22" onclick="">2022</option><option value="23" onclick="">2023</option><option value="24" onclick="">2024</option> </select></div>
                              
                               <div class="label" style="margin-right:86px;">CVV: <input type="text" name="CVV" id="CVV" style="width:65px;"> <!--<a href="javascript:void(0);"  onClick="newWindow('what_cvv.html','','400','400','resizable,scrollbars')">What is this ?</a>--></div>
                               	<div class="flt-n"></div>
                               <div class="label" style="font:bold 12px arial; text-align:left; margin-top:8px; margin-bottom:5px; padding-left:10px; text-align:justify;"><input type="checkbox" name="agree_terms" id="agree_terms" style="float:left;" class="chk validate[required] required radio">
                               <p class="flt-l" style="width:220px; margin-left:10px; margin-bottom:5px; line-height:15px;">I confirm I’m at least 18 years old &amp; agree to the <a data-reveal-id="termsModal">Terms of this Order</a></p></div>
                                          <div class="flt-n"></div>
                               <center><input type="submit" value="" style="margin-left:7px; margin-top:78px;height:80px; width:268px;"></center>
                                <input type="hidden" name="step" value="2">
                                <input type="hidden" name="campaignId" value="66">
                                <input type="hidden" name="productId" value="102">
                                <input type="hidden" name="shippingId" value="2">
                          </form>
                        
                        </div>
                  	
                  </div>
                  <div class="border-box">
                        <p id="show1-b" style="display: block;">
                        	Your order will be shipped within 2-5 business days. You are ordering 1 Bottle of Oxygen Pur today for $49.99. I understand that this is a one time payment and I will be charged $49.99 today and never again.  If you have any questions, please call 1-855-718-5146 Monday through Friday between the hours of 9:00AM to 5:00PM PST.
                        </p>
                        <p id="show2-b" style="display: none;">
                            If you aren't satisfied with your purchase you may return your product for a full refund. Your order will be shipped within 2-5 business days. You are ordering a monthly subscription of Oxygen Pur today for $29.99. I understand that I am subscribing to a monthly shipment program and I will be charged $29.99 per month starting today and every 30 days thereafter. I can cancel at any time without further obligation by calling 1-855-718-5146 Monday through Friday between the hours of 9:00AM to 5:00PM PST.
                        </p>
                        <p id="show3-b" style="display: none;">
                            Your order will be delivered instantly. You are ordering a 1 issue of eBook today for $5.99. I understand that this is a one time payment and I will be charged $5.99 today.  If you have any questions, please call 1-855-718-5146 Monday through Friday between the hours of 9:00AM to 5:00PM PST.
                        </p>
                    </div>
            <!------Right Section End here----->      
              <div class="flt-n"></div>
                  
                  </div>
            </div>

</body>
</html>