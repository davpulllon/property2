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
     <div id='comment-heading'>
    <h3>Login > Admin Area > Manage Vendors > Add Vendor > Vendor added</h3>
    <h3>Vendor Added!!</h3>
    <p>*Vendor has been added successfully!</p>
</div>
<?php
require 'connect.php';
$vendor_email=$_POST["vendor_email"];
$vendor_firstname=$_POST["vendor_firstname"];
$vendor_surname=$_POST["vendor_surname"];
$vendor_phone=$_POST["vendor_phone"];
$sql_insert="INSERT INTO vendor(vendor_email, vendor_firstname, vendor_surname, vendor_phone) VALUES ('$vendor_email', '$vendor_firstname', '$vendor_surname', '$vendor_phone')";
if(mysqli_query($link, $sql_insert)) {
echo "<div id='button-div'>";
echo "<button><a href='managevendors.php'>Return to Manage Vendors page</a></button>";
echo "<button onclick='mainMenu()'; id='second-btn'>Main Menu</button>";
echo "</div>"
;}
else {
echo "An error occurred, try again!";
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






