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
<div id="manage-content" style="background-color:lightgrey;">
 <div id='comment-header'>
    <h3>Login > Admin Area > Manage Properties > Edit Property</h3>
    <h3>Add a Property</h3>
</div>
<div id="addproperty">
<form id="edit-form" method="post" action="processadd.php">
<table>
  <tr>
<td>Vendor_id:</td>
<td><input type="number" name="vendor_id" required="required"/></td>
</tr>
<tr>
<td>Address: </td>
<td><input type="text" name="address1" required="required"/></td>
</tr>
<tr>
<td>Town: </td>
<td><input type="text" name="town" required="required" /></td>
</tr>
<td>County: </td>
<td><input type="text" name="county" required="required" /></td>
</tr>
<td>Price: </td>
<td><input type="text" name="price" required="required" /></td>
</tr>
<tr>
<td>Bedrooms: </td>
<td><input type="text" name="bedrooms" required="required" /></td>
</tr>
<tr>
<td>Short_description: </td>
<td><textarea name="shortdescription" rows="2" cols="21" required="required" /></textarea></td>
</tr>

<tr>
<td>Long_Description: </td>
<td><textarea name="longdescription" rows="4" cols="21" required="required"/></textarea></td>
</tr>
<tr>
<td>Image Path: </td>
<td><input type="text" name="image" required="required" /></td>
</tr>
<tr>
<tr>
<td>Category ID: </td>
<td><input type="number" name="categoryid" required="required" /></td>
</tr>
<td>Vendor Email: </td>
<td><input type="email" name="vendor_email" required="required" /></td>
</tr>
<tr>
<td><input id="submit" type="submit" name="submit" value="Add-Property"/></td>
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