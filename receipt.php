<!DOCTYPE html>
<!-- Xin Li -->
<html>
<head>
<Title>Purchase/Receipt Server</Title>
</head>

<style>
<!-- Put any styles needed for the receipt here from purchase.html -->


.ship{
	padding: 15px;
}

.receipt{
    width:400px;
	padding: 15px;
	background-color: pink;
	border-width:1px;

	border-style:solid;
    overflow:hidden;
}

</style>

<body>

<code>
<?php
 
$FirstName = $_POST ["FirstName"];
$LastName = $_POST ["LastName"];
$Phone = $_POST ["Phone"];
$City = $_POST ["City"];
$State = $_POST ["State"];
$Zip = intVal ($_POST ["Zip"] );
$Quantity = intVal ($_POST ["Quantity"] );
$Size = $_POST["Size"];
$price = 0;
$item ="";

// The following echo represents a test that we can
// access the values of one input fields.

//echo "The form had this for quantity: <b>" . $howMany . "</b>" . PHP_EOL;

if($Size == "Samll"){
    $item = 'small';
    $price = 2.00;
}
if($Size=="Medium"){
    $item = 'medium';
    $price = 2.65;
}
if($Size=="Large"){
    $item = 'large';
    $price = 2.99;
}
$perprice = $price;
$price = $price*$Quantity;
$price = round($price,2);


if($State == 'Arizona')
    $State = "AZ";
if($State == 'Nevada')
    $State = "NV";
if($State == 'Utah')
    $State = "UT";
if($State == 'California')
    $State = "CA";

$toChange = 'Purchase date:'.date('d-m-Y').'<br>Purchased '.$Quantity." item(s) of size'".
$item."' at ".$perprice. ' each<br>Total Cost $'.$price.'<br><br>';

$shipAddress =$FirstName.' '.$LastName.'<br>'.$City.
','.$State.'<br>'.$Zip;


echo '<div class="receipt">'. PHP_EOL;
echo '<h3><b>Receipt</b></h3>'. PHP_EOL;
echo $toChange. PHP_EOL;
echo '<div class="ship">'. PHP_EOL;
echo '<fieldset>'. PHP_EOL;
echo '<legend> Ship to </legend>'. PHP_EOL;
echo $shipAddress. PHP_EOL; 
echo '</fieldset>'. PHP_EOL;
echo '</div>'. PHP_EOL.'</div>'. PHP_EOL;

?>
</code>
</body>
</html>
