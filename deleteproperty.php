<?php
require 'connect.php';
$propertyid= $propertyid = (isset($_GET['propertyid']) ? $_GET['propertyid'] : '');
$sql= "DELETE FROM property WHERE propertyid=$propertyid";
if (mysqli_query( $link, $sql))
{
header("Location: http://eireproperties.freecluster.eu/manageproperties.php");
 exit;
}
else
{
 echo "Could not delete product";
}
mysqli_close($link);
?>