<?php
echo '<h1>POST</h1><pre>';
print_r($_POST);
echo '</pre><br><br>';
// Your POST data
$data = http_build_query(array(
	'username' => 'App Test' ,
	'password' => 'PPxhnXwHMXJG3e' ,
	'method' => 'NewOrderWithProspect' ,
    'prospectId' => $_POST['prospectId'] ,
    'upsellCount' => '0',
    'upsellProductIds' => '4',
    'productId' => '102',
    'campaignId' => '69',
    'shippingId' => '2',
    'creditCardType' => $_POST['creditCardType'],
    'creditCardNumber' => $_POST['creditCardNumber'] ,
    'expirationDate' => $_POST['fields_expmonth'].$_POST['fields_expyear'] ,
    'CVV' => $_POST['CVV'] ,
    'tranType' => 'Sale',
    'billingSameAsShipping' => 'yes',
    'product_qty_1' => '1',


));

// 
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
<title>Submit</title>
<link href="css/checkout.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<?php
if($get_array['errorFound'] !=0){
echo '<br><br><br><h1 style="color:red">Failed</h1>';
echo '<h2>Error Message : '.$get_array['errorMessage'].'</h2>';	
}
else {
echo '<h1 style="font-size:32px;color:Green">Success</h1>
 <h2><br>CustomerId : '.$get_array['customerId'].'</h2>
    <h2><br>OrderId : '.$get_array['orderId'].'</h2>
    <h2><br>OrderTotal : '.$get_array['orderTotal'].'</h2>
';
}
?>
</body>
</html>