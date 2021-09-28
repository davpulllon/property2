<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Manage Properties</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="Irish property website">
  <meta name="keywords" content="Property, ireland, waterford lettings, Commercial property, Residential property, site Property, Eire properties ">
  <meta name="author" content="David Eire">
   <link rel="stylesheet" href="css/style.css">

 
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>

<button style=" color: white; font-size:16px;
  background-color: #2196f3;
  border-radius: 5px; margin:30px 0px -100px 65px;" onclick="history.back()" >Back</button>

<div id="content">
<?php

require 'connect.php';

if (isset($_POST['submit']))
{
$town=$_POST['location'];
$categoryid=$_POST['category'];
$pricerange=$_POST['price'];
}

if ($pricerange=='1') {
    $low=0;
	$high=99999;
	}
elseif ($pricerange=='2'){
      $low=100000;
	$high=199999;
	}
elseif ($pricerange=='3'){
      $low=200000;
	$high=299999;
	}
elseif ($pricerange=='4'){
      $low=300000;
	$high=2000000;
	}
	
$sql="SELECT * from property WHERE property.town='$town' AND property.categoryid='$categoryid' AND property.price>='$low' AND property.price<= '$high'";
$result=mysqli_query($link, $sql);

if(mysqli_num_rows($result)>0)
{

while($row=mysqli_fetch_array($result)) {
$propertyid =$row["propertyid"];
$image=$row["image"];
$content=$row["shortdescription"];
$Address=$row["address1"];
$price=$row["price"];

echo "
<div id='property-container'>
    <div id='property-one'>
      <div class='property-card-image'>
      <img src='$image' width='200'/>
      <button id='info'><a href='moredetails.php?propertyid=".$propertyid."'>More Info</a></button>
      <h3>$Address</h3>
      
      </div>

    <div class='property-card-details'>
    <p><strong>Details: </strong>$content</p>
    <p><strong>Price: </strong>$price $</p>
    
    
  </div>
  </div>
</div>


";
}
echo "</table>";
}
else
{
echo "<h3> There are currently no items in this category</h3>";
}
mysqli_close($link);
?>
<footer>
  <hr class="new1">


<?php include("includes/footer.html");?>
</footer>
</div>

</html>