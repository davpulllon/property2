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
$propertyid= $propertyid = (isset($_GET['propertyid']) ? $_GET['propertyid'] : '');

$sql="SELECT * FROM property WHERE propertyid=$propertyid";
$result=mysqli_query($link, $sql);
$row=mysqli_fetch_array($result);
$propertyid=$row["propertyid"];
$address=$row["address1"];
$town=$row["town"];
$county=$row["county"];
$price=$row["price"];
$bedrooms=$row["bedrooms"];
$shortdesc=$row["shortdescription"];
$longdesc=$row["longdescription"];
$image=$row["image"];
$categoryid=$row["categoryid"];
$vendor_email=$row["vendor_email"];
mysqli_close($link);
?>
<div id="manage-content" style="background-color:lightgrey;">
 <div id='comment-header'>
    <h3>Login > Admin Area > Manage Properties > Edit Property</h3>
    <h3>Add a Property</h3>
</div>
<div id="addproperty">
<form id="edit-form" method="post" action="processedit.php">
<input type="hidden" name="propertyid" value="<?php echo $propertyid; ?>"/>
<table>
<tr>
<td>Address: </td>
<td><input type="text" name="address1" required="required"value="<?php echo $address; ?>"/></td>
</tr>
<tr>
<td>Town: </td>
<td><input type="text" name="town" required="required" value="<?php echo $town; ?>"/></td>
</tr>
<td>County: </td>
<td><input type="text" name="county" required="required" value="<?php echo $county; ?>"/></td>
</tr>
<td>Price: </td>
<td><input type="text" name="price" required="required" value="<?php echo $price; ?>"/></td>
</tr>
<tr>
<td>Bedrooms: </td>
<td><input type="text" name="bedrooms" required="required" value="<?php echo $bedrooms; ?>"/></td>
</tr>
<tr>
<tr>
<td>Description: </td><td><textarea name="shortdescription" rows="8" cols="35"><?php echo $shortdesc;
?></textarea></td>
</tr>

<tr>
<tr>
<td>Further Details: </td> <td><textarea name="longdescription" rows="8" cols="35"><?php echo $longdesc; ?></textarea></td>
</tr>>
<tr>
<tr>
<td>Image Path: </td>
<td><input type="text" name="image" required="required" value="<?php echo
$image; ?>"/></td>
</tr>
<tr>
<tr>
<td>Category ID: </td>
<td><input type="number" name="categoryid" required="required" value="<?php echo
$categoryid; ?>"/></td>
</tr>
<td>Vendor Email: </td>
<td><input type="email" name="vendor_email" required="required" value="<?php echo
$vendor_email; ?>" /></td>
</tr>
<tr>
<td><input id="submit" type="submit" name="submit" value="Update"/></td>
<td><a style="color:white;" href="manageproperties.php" >Go Back</a></td>  






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
