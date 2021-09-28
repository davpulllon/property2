<?php
require 'connect.php';
$vendor_id= $vendor_id = (isset($_GET['vendor_id']) ? $_GET['vendor_id'] : '');
$vendor_id=$_POST["vendor_id"];
$vendor_firstname=$_POST["vendor_firstname"];
$vendor_surname=$_POST["vendor_surname"];
$vendor_phone=$_POST["vendor_phone"];
$vendor_email=$_POST["vendor_email"];
$sql = "UPDATE vendor SET vendor_id='$vendor_id',vendor_firstname='$vendor_firstname',vendor_surname='$vendor_surname',vendor_phone='$vendor_phone',vendor_email='$vendor_email' WHERE vendor_id='$vendor_id'";
//link the database and inhect the values
if (mysqli_query( $link, $sql))
{
 header("Location:http://localhost/property2/managevendors.php");
 exit;
}
else
{
echo "Could not update vendor";
}
mysqli_close($link);
?>