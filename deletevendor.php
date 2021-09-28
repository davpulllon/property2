<?php
require 'connect.php';
$vendor_id = (isset($_GET['vendor_id']) ? $_GET['vendor_id'] : '');
 $sql= "DELETE FROM vendor WHERE vendor_id='$vendor_id'";
if (mysqli_query( $link, $sql))
{
 header("Location:http://localhost/property2/managevendors.php");
 exit;
}
else
{
 echo '<script>alert("Failed. Could not delete the vendor")</script>'; 


}
mysqli_close($link);
?>