<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>My first HTML5 page</title>
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
  <?php
require 'connect.php';
//get the vendor id as identifier from the database
$vendor_id= $vendor_id = (isset($_GET['vendor_id']) ? $_GET['vendor_id'] : '');
$sql="SELECT * FROM vendor WHERE vendor_id=$vendor_id";
//inject the values into database
$result=mysqli_query($link, $sql);
//get the rows to update
$row=mysqli_fetch_array($result);
$vendor_id=$row["vendor_id"];
$vendor_firstname=$row["vendor_firstname"];
$vendor_surname=$row["vendor_surname"];
$vendor_phone=$row["vendor_phone"];
$vendor_email =$row["vendor_email"];

mysqli_close($link);
?>
<div id="manage-content" style="background-color:lightgrey;">
 <div id='comment-header'>
    <h3>Login > Admin Area > Manage Properties > Edit Vendors</h3>
</div>
<div id="addproperty">
<form id="edit-form" method="post" action="processeditvendor.php">
<input type="hidden" name="vendor_id" value="<?php echo $vendor_id; ?>"/>
<table>
<tr>
<td>Firstname: </td> 
<td><input type="text" name="vendor_firstname" required="required"value="<?php echo $vendor_firstname; ?>"/></td>
</tr>
<tr>
<td>Surname: </td>
<td><input type="text" name="vendor_surname" required="required" value="<?php echo $vendor_surname; ?>"/></td>
</tr>
<td>Phone Number: </td>
<td><input type="text" name="vendor_phone" required="required" value="<?php echo $vendor_phone; ?>"/></td>
</tr>
<td>Vendor_email: </td>
<td><input type="text" name="vendor_email" required="required" value="<?php echo $vendor_email; ?>"/></td>
</tr>

<tr>
<td><input id="submit" type="submit" name="submit" value="Update"/></td>
<td><a style="color:white;" href="managevendors.php" >Go Back</a></td>  






</tr>
</table>

</form>

</div>
</div>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
