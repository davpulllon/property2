<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Eireproperties.ie</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Irish property website">
  <meta name="keywords" content="Property, ireland, waterford lettings, Commercial property, Residential property, site Property, Eire properties ">
  <meta name="author" content="David Eire">
 <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="css/style2.css">
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
 <body>
<div id="container">
<?php include("includes/header.html");?>

<div id="content">
<button onclick="history.back()" id="back-properties">Back to properties</button>
<?php
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "epiz_29681339_properties");
$propertyid= $propertyid = (isset($_GET['propertyid']) ? $_GET['propertyid'] : '');
$sql="SELECT * from property where propertyid=$propertyid";
$result=mysqli_query($link, $sql);
$row=mysqli_fetch_array($result);

if(mysqli_num_rows($result)>0)
{
$image=$row["image"];
$property=$row["address1"];
$productdesc=$row["longdescription"];
$price=$row["price"];
echo "<div id='more-details'>
<h3>Property Details</h3>
<h3 id='details_address'>Address: $property</h3>
<img class='details-image' src='$image' width='300'/>
 <h3>Description:</h3>
 <p>$productdesc</p>
 <p><strong>Price: </strong> $$price</p>
 
 </div>";
}
else{
  echo "<h3> There are currently no items to display</h3>";
}

mysqli_close($link);

?>
</div>
<footer>
  <hr class="new1">


<?php include("includes/footer.html");?>
</footer>


</footer>
</div>
</body>
</html>