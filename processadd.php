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
   <link rel="stylesheet" href="css/style3.css">

 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
 <body>
<div id="container">
<?php include("includes/header.html");?>

<div id="content">
    
</div>
<?php
require 'connect.php';
$vendor_id=$_POST["vendor_id"];
$address=$_POST["address1"];
$town=$_POST["town"];
$county=$_POST["county"];
$price=$_POST["price"];
$bedrooms=$_POST["bedrooms"];
$shortdesc=$_POST["shortdescription"];
$longdesc=$_POST["longdescription"];
$image=$_POST["image"];
$categoryid=$_POST["categoryid"];
$vendor_email=$_POST["vendor_email"];
$sql_insert="INSERT INTO property(vendor_id, address1, town, county, price, bedrooms, shortdescription, longdescription, image, categoryid, vendor_email) VALUES ('$vendor_id', '$address', '$town', '$county', '$price', '$bedrooms', '$shortdesc',
 '$longdesc', '$image', '$categoryid','$vendor_email')";
if(mysqli_query($link, $sql_insert)) {
 echo "<div id='comment-heading'>
    <h3>Login > Admin Area > Manage Properties > Add Property > property added</h3>
    <h3>Property Added!!</h3>
    <p>*Property has been added successfully!</p>
    </div>";
  
echo "<div id='button-div'>";
echo "<button><a href='manageproperties.php'>Return to Manage Properties page</a></button>";
echo "<button onclick='mainMenu()'; id='second-btn'>Main Menu</button>";
echo "</div>";
echo "</div>";

}
else{
  echo"<div id='comment-heading'>
    <h3>Property not Added!!</h3>
    <p>*Please Enter the same userId as in the Vendors page!</p>
    </div>";
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
<script>
    function mainMenu(){
        window.location.assign("admin.php");
    }

</script>
</html>






